<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>World Cup 2026 Zero-goal Match Checker</title>
	<link rel="apple-touch-icon" sizes="600x600" href="./favicon.png?v=20260615142134">
	<link rel="icon" type="image/png" sizes="600x600" href="./favicon.png?v=20260615142134">
	<style>
	body {
		font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
		max-width: 600px;
		margin: 1rem auto;
	}

	h1 {
		font-size: 23px;
		text-align: center;
	}

	h2 {
		font-size: 20px;
		font-weight: bold;
		margin-top: 1.5rem;
		margin-bottom: -.25rem;
		text-transform: uppercase;
		position: sticky;
		top: 0;
		background-color: #fff;
		margin-left: -0.5rem;
		margin-right: -0.5rem;
		padding: 0.5rem;
	}

	h3 {
		font-size: 18px;
		margin-top: 1.25rem;
		margin-bottom: -.25rem;
	}

	a:link,
	a:visited,
	a:active,
	a:hover {
		color: darkgreen;
		text-decoration: underline;
	}

	main,
	footer {
		margin: 0 1rem;
	}

	details {
		background: #fafafa;
		border-bottom: 1px solid #eee;
		border-top: 1px solid #eee;
		margin-left: -1rem;
		margin-right: -1rem;
		padding: 0.5rem 1rem;
	}

	details summary {
		color: #757575;
		font-size: 14px;
		font-weight: 600;
		text-transform: uppercase;
	}

	details h2 {
		font-size: 18px;
		background-color: #fafafa;
	}

	details h3 {
		font-size: 16px;
	}

	details + div h2 {
		margin-top: 0.5rem;
	}

	p.note {
		font-size: 12px;
		color: #aaa;
		text-align: center;
	}

	p {
		font-size: 16px;
		margin: 1rem 0;
	}

	.matches p {
		display: flex;
	}

	.time {
		width: 75px;
		min-width: 75px;

		small {
			font-size: 12px;
		}
	}

	.matchup-and-status {
		display: flex;
		flex: 1;
		flex-wrap: wrap;
	}

	.matchup,
	.reveal-button {
		margin-right: 6px;
	}

	.matchup {
		font-weight: 600;
	}

	button.reveal-button {
		appearance: none;
		-webkit-appearance: none;
		border: 1px solid #aaa;
		border-radius: 3px;
		background: linear-gradient(to bottom, #fff, #e8e8e8);
		color: #333;
		cursor: pointer;
		font-weight: bold;
		line-height: 1;
		padding: 2px 5px;
		text-transform: uppercase;
	}

	@media (hover: hover) {
		button.reveal-button {
			opacity: 0.8;
		}

		button.reveal-button:hover {
			opacity: 1;
		}
	}

	.status {
		font-weight: 700;
	}

	.upcoming {
		color: #757575;
	}

	.in-progress {
		color: orangered;
	}

	.zero-goal-match {
		color: darkred;
	}

	.completed-match,
	.not-zero-goal-match {
		color: darkgreen;
	}

	.ground,
	.group {
		font-size: 13px;
		color: #aaa;
		min-width: 100%;
		margin-top: 0.25rem;
	}

	footer {
		margin-top: 2rem;
	}

	.reload-button {
		appearance: none;
		-webkit-appearance: none;
		border: 2px solid #888;
		width: 40px;
		height: 40px;
		border-radius: 50%;
		background: #eaeaea;
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		position: sticky;
		bottom: 35px;
		margin-left: auto;
		margin-right: 35px;
		margin-top: -35px;
	}

	.reload-button svg {
		fill: #888;
		width: 24px;
		height: 24px;
	}
	</style>
</head>
<body>
	<h1>
		⚽️&ensp;World Cup 2026&ensp;🏆<br>
		0️⃣&ensp;Zero-goal Match Checker&ensp;🧐
	</h1>
	<main>
		<div class="matches">
			<?php
			// Save the JSON response to a local file periodically so that we don't
			// overload the API server.
			if ( file_exists( 'matches.json' ) && filemtime( 'matches.json' ) > strtotime( '5 minutes ago' ) ) {
				$matches_json = file_get_contents( 'matches.json' );
			}
			else {
				if ( $matches_json = file_get_contents( 'https://raw.githubusercontent.com/upbound-web/worldcup-live.json/master/2026/worldcup.json' ) ) {
					file_put_contents( 'matches.json', $matches_json );
				}
				else {
					$matches_json = file_get_contents( 'matches.json' );
				}
			}

			$data = json_decode( $matches_json );
			$matches = $data->matches;

			// Sort matches by date ascending.
			$match_dates = array_column( $matches, 'date');
			$match_times = array_column( $matches, 'time');
			array_multisort(
				$match_dates, SORT_ASC,
				$match_times, SORT_ASC,
				$matches
			);

			$output = '';

			if ( empty( $matches ) ) {
				echo '<p>Something&rsquo;s wrong&mdash;could not get matches data! 😩</p>';
			} else {
				$output .= '<details><summary>Past Matches</summary>';

				$past_matches_section_open = true;
				$in_future_and_new_round   = false;
				$loop_round                = '';

				// Loop through all matches.
				foreach( $matches as $match ) {
					$match_round = $match->round;

					$match_time     = substr( $match->time, 0, 5 ); // Get the 00:00 from the start of the time string.
					$match_timezone = new DateTimeZone( 'GMT' . substr( $match->time, -2 ) ); // Get the '-n' from the end of the time string.

					$current_time_in_match_timezone = new DateTime( 'now', $match_timezone );
					$match_start_in_match_timezone  = new DateTime( $match->date . ' ' . $match_time . ':00', $match_timezone );
					$match_end_in_match_timezone    = ( clone $match_start_in_match_timezone )->modify( '+ 2 hours' );

					$here_timezone     = new DateTimeZone( 'America/Los_Angeles' );
					$current_time_here = new DateTime( 'now', $here_timezone );
					$match_start_here  = ( clone $match_start_in_match_timezone )->setTimezone( $here_timezone );
					$match_end_here    = ( clone $match_start_here )->modify( '+ 2 hours' );

					// Get the status of the match:
					// 1. If the final score is in, the match is over.
					if ( ! empty( $match->score->ft ) ) {
						$match_status = 'completed';
					}
					// 2. If the final score isn't in and the current time is after the
					//    match started and before two hours later, we can assume the
					//    match is in progress.
					else if ( $match_start_in_match_timezone < $current_time_in_match_timezone && $current_time_in_match_timezone < $match_end_in_match_timezone ) {
						$match_status = 'playing';
					}
					// 3. If the final score isn't in and the current time is after the
					//    match start but not within two hours of the match start, we can
					//    assume the match is over.
					else if ( $match_start_in_match_timezone < $current_time_in_match_timezone ) {
						$match_status = 'completed';
					}
					// 4. If the final score isn't in and the current time is before the
					//    match start, the match is in the future.
					else {
						$match_status = 'future';
					}

					// Rename all 'Matchday [n]' rounds into 'Group Stage.'
					if ( preg_match( '~Matchday~', $match->round ) ) {
						$match_round = 'Group Stage';
					}

					// If this match happens today or in the future, then close the 'Past
					// Matches' section.
					if ( $past_matches_section_open && $current_time_in_match_timezone->format( 'd' ) <= $match_start_in_match_timezone->format( 'd' ) ) {
						$past_matches_section_open = false;
						$output .= '</details>';

						if ( $loop_round === $match_round ) {
							$output .= '
							<div class="round">
								<h2>' . $match_round . '</h2>';
						}
					}

					// If we're in the future and it's a new round, start hiding teams.
					if ( ! $in_future_and_new_round
						&& ( 'future' === $match_status && $loop_round !== $match_round ) ) {
							$output .= '<!-- Start hiding matchups! -->';
							$in_future_and_new_round = true;
					}

					// Figure out if we need to show a new round heading.
					if ( empty( $loop_round ) || $loop_round !== $match_round ) {
						if ( ! empty( $loop_round ) ) {
							$output .= '</div>';
						}

						$loop_round = $match_round;

						$output .= '<div class="round">';
						$output .= '<h2>' . $loop_round . '</h2>';
					}

					// Figure out if we need to show a new day heading.
					if ( ! isset( $day )
						|| ( isset( $day ) && $match_start_in_match_timezone->format( 'd' ) !== $day ) ) {
						$day = $match_start_in_match_timezone->format( 'd' );
						$output .= '<h3>' . $match_start_in_match_timezone->format( 'l, F d, Y' ) . '</h3>';
					}

					// Show match info.
					$show_teams  = false;
					$hidden_attr = 'hidden';
					$team_1_name = $match->team1;
					$team_2_name = $match->team2;

					$team_1_determined = true;
					$team_2_determined = true;

					// If the team name contains a number, the team is to-be-determined.
					if ( preg_match( '~[0-9]+~', $match->team1 ) ) {
						$team_1_determined = false;
					}

					if ( preg_match( '~[0-9]+~', $match->team2 ) ) {
						$team_2_determined = false;
					}

					// Fix team names.
					switch ( $team_1_name ) {
						case 'Cape Verde':
							$team_1_name = 'Cabo Verde';
							break;
						case 'Ivory Coast':
							$team_1_name = 'Côte d’Ivoire';
							break;
						case 'Czech Republic':
							$team_1_name = 'Czechia';
							break;
						case 'Turkey':
							$team_1_name = 'Türkiye';
							break;
					}

					switch ( $team_2_name ) {
						case 'Cape Verde':
							$team_2_name = 'Cabo Verde';
							break;
						case 'Ivory Coast':
							$team_2_name = 'Côte d’Ivoire';
							break;
						case 'Czech Republic':
							$team_2_name = 'Czechia';
							break;
						case 'Turkey':
							$team_2_name = 'Türkiye';
							break;
					}

					// Show team names if:
					// - match is in current round AND match is not in the future
					//	 OR
					// - both teams have not been named yet
					if (
						// It's not time to hide fields...
						! $in_future_and_new_round

						// ...OR if both teams haven't been named yet.
						|| ( ! $team_1_determined && ! $team_2_determined )
					) {
						$show_teams = true;
						$hidden_attr = '';
					}

					$output .= '<p>
						<span class="time">' . $match_start_here->format( 'ga' ) . ' <small>PT</small></span>
						<span class="matchup-and-status">';

					$output .= '<span class="matchup" ' . $hidden_attr . '>' . $team_1_name . ' v. ' . $team_2_name . '</span>';

					if ( ! $show_teams ) {
						$output .= '<button class="reveal-button">Reveal Matchup</button>';
					}

					if ( 'playing' === $match_status ) {
						$output .= '<span class="status in-progress">📢 PLAYING!</span>';
					}
					else if ( 'future' === $match_status ) {
						$output .= '<span class="status upcoming">⏰ SOON!</span>';
					}
					else if ( 'completed' === $match_status ) {
						if ( $match_round === 'Group Stage' ) {
							if ( isset( $match->score->ft )
								&& 0 === $match->score->ft[0] && 0 === $match->score->ft[1] ) {
								$output .= '<span class="status zero-goal-match">0-0! 🥱</span>';
							}
							else {
								$output .= '<span class="status not-zero-goal-match">NOT 0-0! ⚽️</span>';
							}
						}
						else {
							$output .= '<span class="status completed-match">COMPLETE! ⚽️</span>';
						}
					}

					$output .= '<span class="ground">in ' . $match->ground . '</span>';

					if ( ! empty( $match->group ) ) {
						$output .= '<span class="group">' . $match->group . '</span>';
					}

					$output .= '
						</span>
					</p>';
				}

				echo $output;
			}
			?>
		</div>
	</main>
	<footer>
		<details>
			<summary>FAQ &amp; About This Site</summary>
			<h2>Why are some matchups hidden?</h2>
			<p>To prevent spoilers, I hide the matchup of games in future rounds that
			would reveal the result of a game happening today. (If the most recently
			completed game happened before today, no matchups are hidden.)</p>
			<h2>A Note About 0&ndash;0 Games</h2>
			<p>Only games in the Group Stage (the first stage) can end in a 0&ndash;0
				draw. After that, games must have a winner.</p>
			<h2>Who made this?</h2>
			<p>This was built by <a href="https://matthewmcvickar.com">Matt McVickar</a>, a software engineer in Portland, OR, US.</p>
			<h2>How does it work?</h2>
			<p>The code is <a href="https://github.com/matthewmcvickar/world-cup-zero-goal-match-checker">open source on GitHub</a>.</p>
			<p>The World Cup match data comes from the <a href="https://github.com/openfootball/worldcup.json">openfootball worldcup.json project</a>.
			New data is fetched and saved to a local JSON file whenever this page
			loads, as long as it has been at least five minutes since the last time
			it was fetched.</p>
			<h2>Why do this?</h2>
			<p>I made this because my partner loves to watch World Cup matches but
			wants to skip the matches where nobody scores, because those aren&rsquo;t
			as exciting and there are <em>a lot</em> of matches.</p>
			<p>This site makes it easy to check on matches from the day to find out if
			you can get by with a the highlights instead of a 90-minute match.</p>
		</details>
	</footer>
	<button class="reload-button" onclick="window.location.reload()">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M500.7 138.7L512 149.4L512 96C512 78.3 526.3 64 544 64C561.7 64 576 78.3 576 96L576 224C576 241.7 561.7 256 544 256L416 256C398.3 256 384 241.7 384 224C384 206.3 398.3 192 416 192L463.9 192L456.3 184.8C456.1 184.6 455.9 184.4 455.7 184.2C380.7 109.2 259.2 109.2 184.2 184.2C109.2 259.2 109.2 380.7 184.2 455.7C259.2 530.7 380.7 530.7 455.7 455.7C463.9 447.5 471.2 438.8 477.6 429.6C487.7 415.1 507.7 411.6 522.2 421.7C536.7 431.8 540.2 451.8 530.1 466.3C521.6 478.5 511.9 490.1 501 501C401 601 238.9 601 139 501C39.1 401 39 239 139 139C238.9 39.1 400.7 39 500.7 138.7z"/></svg>
	</button>
	<script>
	document.querySelectorAll('.reveal-button').forEach( (button) => {
		button.addEventListener('click', (event) => {
			event.target.hidden = true;
			event.target.previousElementSibling.hidden = false;
		} );
	} );
	</script>
</body>
</html>
