<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nil-nil Or No — World Cup 2026 Zero-goal Match Checker</title>
	<link rel="apple-touch-icon" sizes="600x600" href="./favicon.png?v=20260615142134">
	<link rel="icon" type="image/png" sizes="600x600" href="./favicon.png?v=20260615142134">
	<style>
	:root {
		--primary-color:    #1E90FF;
		--primary-color-bg: #bfdfff;
		--secondary-color:  #666;

		--default-font: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
		--heading-font: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
	}

	body {
		font-family: var(--default-font);
		margin: 1rem auto;
		max-width: 600px;
	}

	h1 {
		line-height: 1;
		margin-top: 0.25rem;
		text-align: center;
	}

	.title {
		color: var(--primary-color);
		font-family: var(--heading-font);
		font-size: 3.2rem;
		letter-spacing: -0.38rem;
		text-shadow: -2px 2px 0 #ccc;
		text-transform: uppercase;
	}

	.subtitle {
		color: var(--secondary-color);
		font-size: 1rem;
		letter-spacing: -0.025rem;
	}

	h2 {
		color: var(--primary-color);
		font-family: var(--heading-font);
		font-size: 20px;
		font-weight: bold;
		margin-bottom: -.25rem;
		margin-left: -0.5rem;
		margin-right: -0.5rem;
		margin-top: 1.25rem;
		padding: 0 0.5rem;
		text-transform: uppercase;
	}

	.today-and-future-matches h2 {
		position: sticky;
		top: 0;
		z-index: 2;

		&::after {
			background-color: #fff;
			content: "";
			position: absolute;
			left: 0;
			top: 100%;
			width: 100%;
			height: 18px;
			background-image: linear-gradient(to bottom, #ffffff, #ffffff00);
		}
	}

	h3 {
		color: var(--secondary-color);
		font-size: 18px;
		letter-spacing: -0.02rem;
		margin-bottom: 0;
		margin-top: 1.25rem;
	}

	a:link,
	a:visited,
	a:active,
	a:hover {
		color: darkgreen;
		text-decoration: underline;
	}

	main {
		margin: 0 12px;
	}

	details {
		background: #fafafa;
		border-bottom: 1px solid #eee;
		border-top: 1px solid #eee;
		margin-bottom: 1rem;
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
		background-color: #fafafa;
		font-size: 18px;
	}

	details h3 {
		font-size: 16px;
	}

	.about h2 {
		color: #333;
		font-family: var(--default-font);
		font-size: 1rem;
		margin-bottom: 0.5rem;
		text-transform: none;
	}

	.about p {
		line-height: 1.4;
		margin: 0 0 1rem 0;
	}

	.match {
		display: flex;
		font-size: 16px;
		margin: 1rem 0;
	}

	.time {
		font-size: 13px;
		min-width: 55px;
		width: 55px;

		small {
			font-size: 10px;
		}
	}

	.match-details {
		display: flex;
		flex-wrap: wrap;
		flex: 1;
		gap: 0.25rem;
		position: relative;
	}

	.teams {
		font-weight: 600;
	}

	.zero-draw,
	.status {
		font-weight: 700;
		letter-spacing: -0.01rem;
	}

	.status--upcoming {
		color: #757575;
	}

	.status--playing {
		color: orangered;
	}

	.status--complete {
		color: darkgreen;
	}

	.zero-draw--true {
		color: darkred;
	}

	.zero-draw--false {
		color: darkgreen;
	}

	.group-and-ground {
		color: #aaa;
		font-size: 13px;
		min-width: 100%;
		text-wrap: balance;
	}

	.group + .ground {
		margin-left: 1en;
	}

	[hidden] {
		display: none;
	}

	button {
		-webkit-appearance: none;
		appearance: none;
		background: var(--primary-color-bg);
		border-radius: 10px;
		border: 1px solid var(--primary-color);
		color: #000;
		font-weight: 500;
		line-height: 1;
		padding: 0.2rem 0.5rem;
	}

	button[data-action="reveal-zero-draw"] {
		background-color: var(--primary-color-bg);
		border-color: var(--primary-color);
		position: absolute;
		right: 0;
		top: 1px;
	}

	.big-buttons {
		bottom: 30px;
		display: flex;
		gap: 1rem;
		justify-content: flex-end;
		margin: 3rem 0 0 0;
		padding: 0 30px;
		position: sticky;
		width: calc(100% - 60px);

		button {
			align-content: center;
			align-items: center;
			background: #eaeaea;
			border-radius: 20px;
			border: 2px solid var(--secondary-color);
			color: var(--secondary-color);
			display: flex;
			flex-direction: row;
			font-size: 1rem;
			font-weight: 600;
			gap: 0.25rem;
			height: 40px;
			justify-content: center;
			padding: 0 0.65rem 0 0.75rem;
			vertical-align: auto;

			svg {
				fill: currentColor;
				height: 24px;
				width: 24px;
			}
		}

		button.button--icon-only {
			border-radius: 50%;
			padding: 0;
			width: 40px;
		}
	}
	</style>
</head>
<body>
	<h1>
		<span class="title">Nil-nil Or No</span><br>
		<span class="subtitle">The World Cup 2026 Zero-goal Match Checker</span>
	</h1>
	<main>
		<details class="about">
			<summary>About</summary>
			<h2>What?</h2>
			<p>This is a complete World Cup 2026 match schedule that tells you whether
			a game ended in a 0&ndash;0 draw. That&rsquo;s it!</p>
			<h2>Why?</h2>
			<p>I made this because my partner loves to watch World Cup matches but
			wants to skip the matches where nobody scores, because those (usually)
			aren&rsquo;t very exciting and there are <em>a lot</em> of matches.</p>
			<p>This site makes it easy to check on matches from the day to find out if
			you can get by with a the highlights instead of a 90-minute match.</p>
			<h2>Which matches can end in a 0&ndash;0 draw?</h2>
			<p>Only matches in the Group Stage (the first stage) can end in a 0&ndash;0
			draw. After that, matches must have a winner.</p>
			<h2>Why are some team matchups hidden?</h2>
			<p>To prevent spoilers, I hide the teams for matches in future rounds that
			would reveal the result of a match happening today. (If the most recently
			completed match happened before today, no matchups are hidden.)</p>
			<h2>Who made this?</h2>
			<p>This was built by <a href="https://matthewmcvickar.com">Matt McVickar</a>, a software engineer in Portland, OR, US.</p>
			<h2>How does it work?</h2>
			<p>The code is <a href="https://github.com/matthewmcvickar/world-cup-zero-goal-match-checker">open source on GitHub</a>.</p>
			<p>The World Cup match data comes from the <a href="https://github.com/openfootball/worldcup.json">openfootball worldcup.json project</a>.
			New data is fetched and saved to a local JSON file whenever this page
			loads, as long as it has been at least five minutes since the last time
			it was fetched.</p>
		</details>
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

					$match_is_today = $current_time_in_match_timezone->format( 'Y-m-d' ) === $match_start_in_match_timezone->format( 'Y-m-d' );

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
					if ( $past_matches_section_open && $current_time_in_match_timezone->format( 'Y-m-d' ) <= $match_start_in_match_timezone->format( 'Y-m-d' ) ) {
						$past_matches_section_open = false;
						$output .= '</details>
						<div class="today-and-future-matches">';

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
					$hidden_attr = 'ariaHidden="true" hidden';

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

					$output .= '<div class="match">
						<div class="time">' . $match_start_here->format( 'ga' ) . ' <small>PT</small></div>
						<div class="match-details">';

					$output .= '<span class="teams" data-teams ' . $hidden_attr . '>' . $team_1_name . ' v. ' . $team_2_name . '</span>';

					if ( ! $show_teams ) {
						$output .= '<button data-action="reveal-teams">Reveal Teams</button>';
					}

					if ( 'playing' === $match_status ) {
						$output .= '<span class="status status--playing">📢 PLAYING!</span>';
					}
					// else if ( 'future' === $match_status && $match_is_today ) {
					// 	$output .= '<span class="status status--upcoming">⏰ SOON!</span>';
					// }
					else if ( 'completed' === $match_status ) {
						// $output .= '<span class="status status--complete">DONE!</span>';

						if ( $match_round === 'Group Stage' ) {
							if ( isset( $match->score->ft )
								&& 0 === $match->score->ft[0] && 0 === $match->score->ft[1] ) {
								$output .= '<span class="zero-draw zero-draw--true" data-zero-draw="true" aria-hidden="true" hidden>0&ndash;0! 🥱</span>';
							}
							else {
								$output .= '<span class="zero-draw zero-draw--false" data-zero-draw="false" aria-hidden="true" hidden>NOT 0&ndash;0! ⚽️</span>';
							}
							$output .= '<button data-action="reveal-zero-draw">Reveal if Nil-nil</button>';
						}
					}

					$output .= '
						<span class="group-and-ground">
					';

					if ( ! empty( $match->group ) ) {
						$output .= '<span class="group">' . $match->group . '</span> ';
					}

					$output .= '
							<span class="ground">in ' . $match->ground . '</span>
						</span>';

					$output .= '
						</div>
					</div>';
				}

				echo $output;
			}
			?>
			</div>
		</div>
	</main>
	<div class="big-buttons">
		<button data-action="reveal-all-zero-draws">
			<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Pro v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2026 Fonticons, Inc.--><path d="M376 88C376 57.1 350.9 32 320 32C289.1 32 264 57.1 264 88C264 118.9 289.1 144 320 144C350.9 144 376 118.9 376 88zM179.7 245C180.9 242 183.9 240 187.1 240L223 240L200.3 330.6C192 363.8 211.3 397.6 244 407.4L340 436.2L290.8 547C283.6 563.1 290.9 582.1 307 589.2C323.1 596.3 342.1 589.1 349.2 573L405.8 445.6C417.5 419.2 403.4 388.4 375.7 380.1L300.3 357.5L321 287.1L331 304.2C342.5 323.9 363.5 336 386.3 336L447.9 336C465.6 336 479.9 321.7 479.9 304C479.9 286.3 465.6 272 447.9 272L386.3 272L353.5 215.7C339.2 191.1 312.9 176 284.4 176L187.1 176C157.7 176 131.2 193.9 120.2 221.3L98.3 276.1C91.7 292.5 99.7 311.1 116.1 317.7C132.5 324.3 151.1 316.3 157.7 299.9L179.7 245zM167.8 452.6C165.9 458 162.5 462.9 158 466.5L75.6 534.5C62 545.7 60 565.9 71.3 579.5C82.6 593.1 102.7 595.1 116.3 583.8L198.7 515.9C212.1 504.9 222.2 490.4 228 474.1L234.9 454.8L230.2 453.4C209.8 447.3 192.3 435.8 179 421L167.7 452.7zM512 608C547.3 608 576 579.3 576 544C576 508.7 547.3 480 512 480C476.7 480 448 508.7 448 544C448 579.3 476.7 608 512 608z"/></svg>
			<span>Reveal All Matches</span>
		</button>
		<button class="button--icon-only" data-action="reload" aria-label="Reload">
			<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Pro v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2026 Fonticons, Inc.--><path d="M500.7 138.7L512 149.4L512 96C512 78.3 526.3 64 544 64C561.7 64 576 78.3 576 96L576 224C576 241.7 561.7 256 544 256L416 256C398.3 256 384 241.7 384 224C384 206.3 398.3 192 416 192L463.9 192L456.3 184.8C456.1 184.6 455.9 184.4 455.7 184.2C380.7 109.2 259.2 109.2 184.2 184.2C109.2 259.2 109.2 380.7 184.2 455.7C259.2 530.7 380.7 530.7 455.7 455.7C463.9 447.5 471.2 438.8 477.6 429.6C487.7 415.1 507.7 411.6 522.2 421.7C536.7 431.8 540.2 451.8 530.1 466.3C521.6 478.5 511.9 490.1 501 501C401 601 238.9 601 139 501C39.1 401 39 239 139 139C238.9 39.1 400.7 39 500.7 138.7z"/></svg>
		</button>
	</div>
	<script>
	document.querySelectorAll('button').forEach((button) => {
		button.addEventListener('click', (event) => {
			event.preventDefault();

			switch (button.dataset.action) {
				case 'reload':
					window.location.reload();
					break;

				case 'reveal-all-zero-draws':
					event.target.disabled = true;
					event.target.ariaHidden = true;
					document.querySelectorAll('[data-zero-draw]').forEach((element) => {
						element.hidden = false;
						element.ariaHidden = false;
					});
					document.querySelectorAll('button[data-action="reveal-zero-draw"]').forEach((element) => {
						element.hidden = true;
						element.ariaHidden = true;
					});
					break;

				case 'reveal-zero-draw':
					event.target.hidden = true;
					event.target.ariaHidden = true;
					event.target.previousElementSibling.hidden = false;
					event.target.previousElementSibling.ariaHidden = false;
					break;

				case 'reveal-teams':
					event.target.hidden = true;
					event.target.ariaHidden = true;
					event.target.previousElementSibling.hidden = false;
					event.target.previousElementSibling.ariaHidden = false;
					break;
			}
		});
	});
	</script>
</body>
</html>
