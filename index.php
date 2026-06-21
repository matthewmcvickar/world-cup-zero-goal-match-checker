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

		--red-border: #ff4500; /* orangered */
		--red-bg: #ffe9e3;

		--default-font: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
		--heading-font: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
	}

	/*! modern-normalize v3.0.1 | MIT License | https://github.com/sindresorhus/modern-normalize */ /* Document ======== */ /** Use a better box model (opinionated). */ *, ::before, ::after { box-sizing: border-box; } /** 1. Improve consistency of default fonts in all browsers. (https://github.com/sindresorhus/modern-normalize/issues/3) 2. Correct the line height in all browsers. 3. Prevent adjustments of font size after orientation changes in iOS. 4. Use a more readable tab size (opinionated). */ html { font-family: system-ui, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji'; /* 1 */ line-height: 1.15; /* 2 */ -webkit-text-size-adjust: 100%; /* 3 */ tab-size: 4; /* 4 */ } /* Sections ======== */ /** Remove the margin in all browsers. */ body { margin: 0; } /* Text-level semantics ==================== */ /** Add the correct font weight in Chrome and Safari. */ b, strong { font-weight: bolder; } /** 1. Improve consistency of default fonts in all browsers. (https://github.com/sindresorhus/modern-normalize/issues/3) 2. Correct the odd 'em' font sizing in all browsers. */ code, kbd, samp, pre { font-family: ui-monospace, SFMono-Regular, Consolas, 'Liberation Mono', Menlo, monospace; /* 1 */ font-size: 1em; /* 2 */ } /** Add the correct font size in all browsers. */ small { font-size: 80%; } /** Prevent 'sub' and 'sup' elements from affecting the line height in all browsers. */ sub, sup { font-size: 75%; line-height: 0; position: relative; vertical-align: baseline; } sub { bottom: -0.25em; } sup { top: -0.5em; } /* Tabular data ============ */ /** Correct table border color inheritance in Chrome and Safari. (https://issues.chromium.org/issues/40615503, https://bugs.webkit.org/show_bug.cgi?id=195016) */ table { border-color: currentcolor; } /* Forms ===== */ /** 1. Change the font styles in all browsers. 2. Remove the margin in Firefox and Safari. */ button, input, optgroup, select, textarea { font-family: inherit; /* 1 */ font-size: 100%; /* 1 */ line-height: 1.15; /* 1 */ margin: 0; /* 2 */ } /** Correct the inability to style clickable types in iOS and Safari. */ button, [type='button'], [type='reset'], [type='submit'] { -webkit-appearance: button; } /** Remove the padding so developers are not caught out when they zero out 'fieldset' elements in all browsers. */ legend { padding: 0; } /** Add the correct vertical alignment in Chrome and Firefox. */ progress { vertical-align: baseline; } /** Correct the cursor style of increment and decrement buttons in Safari. */ ::-webkit-inner-spin-button, ::-webkit-outer-spin-button { height: auto; } /** 1. Correct the odd appearance in Chrome and Safari. 2. Correct the outline style in Safari. */ [type='search'] { -webkit-appearance: textfield; /* 1 */ outline-offset: -2px; /* 2 */ } /** Remove the inner padding in Chrome and Safari on macOS. */ ::-webkit-search-decoration { -webkit-appearance: none; } /** 1. Correct the inability to style clickable types in iOS and Safari. 2. Change font properties to 'inherit' in Safari. */ ::-webkit-file-upload-button { -webkit-appearance: button; /* 1 */ font: inherit; /* 2 */ } /* Interactive =========== */ /* Add the correct display in Chrome and Safari. */ summary { display: list-item; }

	html {
		overscroll-behavior: none;
	}

	body {
		font-family: var(--default-font);
		margin: 0.5rem auto 1rem auto;
		max-width: min(100vw, 600px);
	}

	h1 {
		line-height: 1;
		margin-bottom: 0.75rem;
		margin-top: 0.25rem;
		text-align: center;

		span {
			display: block;
		}
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
		margin-top: 0.25rem;
	}

	h2 {
		color: var(--primary-color);
		font-family: var(--heading-font);
		font-size: 20px;
		font-weight: bold;
		margin-bottom: -.25rem;
		margin-left: -0.5rem;
		margin-right: -0.5rem;
		margin-top: 1rem;
		padding: 0.25rem 0.5rem 0;
		text-transform: uppercase;
	}

	.future-matches {
		opacity: 0;
		transition: opacity .25s ease-in;
	}

	.future-matches.loaded {
		opacity: 1;
	}

	.future-matches h2 {
		background-color: #fff;
		position: sticky;
		top: 0;
		z-index: 2;

		&::after {
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
		margin-bottom: 0.75rem;
		margin-left: -12px;
		margin-right: -12px;
		padding: 0 12px;
	}

	details summary {
		background: #fafafa;
		color: #757575;
		font-size: 14px;
		font-weight: 600;
		text-transform: uppercase;
		padding-top: 0.5rem;
		padding-bottom: .5rem;
		position: sticky;
		top: 0;
		z-index: 2;
	}

	details:open summary::after {
		content: "";
		position: absolute;
		left: 0;
		top: 100%;
		width: 100%;
		height: 18px;
		background-image: linear-gradient(to bottom, #fafafa, #fafafa00);
	}

	details h2 {
		background-color: #fafafa;
		font-size: 18px;
		margin-top: 0;
		position: sticky;
		top: 28px;
		z-index: 2;
	}

	details h2::after {
		content: "";
		position: absolute;
		left: 0;
		top: 100%;
		width: 100%;
		height: 18px;
		background-image: linear-gradient(to bottom, #fafafa, #fafafa00);
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

	time {
		font-size: 13px;
		line-height: 1;
		min-width: 55px;
		width: 55px;
		margin-top: 4px;

		small {
			font-size: 10px;
		}
	}

	/* Show the fallback time after two seconds if the JS hasn't populated the
	local user browser time. */
	.fallback-time {
		animation: fade-in 1 2s;
	}

	@keyframes fade-in {
		0%   { opacity: 0; }
		50%  { opacity: 0; }
		100% { opacity: 1; }
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

	.match-details.reveal-score .team--winner {
		background-color: #00640020;
		border-radius: 4px;
		color: darkgreen;
		font-weight: 600;
		margin-top: 3px;
		line-height: 1;
		padding: 0.15rem 0.25rem;
		transform: translateY(2px);
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
		color: var(--red-border);
	}

	.status--complete {
		color: darkgreen;
	}

	.zero-draw {
		border-radius: 4px;
		margin-top: -3px;
		line-height: 1;
		padding: 0.15rem 0.25rem;
		transform: translateY(2px);
	}

	.zero-draw--true {
		background-color: #ff450020;
		color: darkred;
	}

	.zero-draw--false {
		background-color: #00640020;
		color: darkgreen;
	}

	.group-and-ground {
		color: #aaa;
		font-size: 13px;
		line-height: 1.4;
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
		font-size: 12px;
		font-weight: 500;
		line-height: 1;
		padding: 0.2rem 0.5rem;
		user-select: none;
	}

	button:disabled {
		background: #eee !important;
		border-color: #bbb !important;
		color: #bbb !important;
		cursor: default;
		pointer-events: none;
	}

	button[data-action="reveal-zero-draw"],
	button[data-action="reveal-score"] {
		position: absolute;
		right: 0;
		top: 0;

		&:active {
			color: #fff;
		}
	}

	button[data-action="reveal-zero-draw"] {
		background-color: var(--primary-color-bg);
		border-color: var(--primary-color);

		&:active {
			background-color: var(--primary-color);
		}
	}

	button[data-action="reveal-score"] {
		background-color: #ffc9b4;
		border-color: var(--red-border);

		&:active {
			background-color: var(--red-border);
		}
	}

	.big-buttons {
		bottom: 12px;
		display: flex;
		gap: 0.5rem;
		justify-content: flex-end;
		margin: 3rem 0 0 0;
		padding: 0 12px;
		position: sticky;
		width: 100%;

		button {
			align-content: center;
			align-items: center;
			background: #eaeaea;
			border-radius: 20px;
			border: 2px solid var(--secondary-color);
			color: var(--secondary-color);
			display: flex;
			flex-direction: row;
			font-size: 0.8rem;
			font-weight: 600;
			line-height: 1.1;
			gap: 0.33rem;
			height: 40px;
			justify-content: center;

			&:active {
				background: var(--secondary-color);
				color: #fff;
			}

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

		button[data-action="reveal-all-zero-draws"] {
			padding: 0 0.9rem 0 0.75rem;
		}

		button[data-action="enable-score-reveal"] {
			margin-right: auto;
			padding-right: .75rem;

			svg {
				transform: translateY(1px);
			}
		}

		button[data-action="reveal-all-scores"] {
			margin-right: auto;
		}
	}

	button.reloading {
		animation: spin 1 500ms;
	}

	@keyframes spin {
		0%  { transform: rotate(0deg); }
		100% { transform: rotate(360deg); }
	}

	button[hidden] {
		display: none;
	}

	.score {
		background-color: #00640020;
		border-radius: 4px;
		color: darkgreen;
		font-weight: 600;
		margin-top: -3px;
		line-height: 1;
		padding: 0.15rem 0.25rem;
		transform: translateY(2px);
	}
	</style>
</head>
<body>
	<h1>
		<span class="title">Nil-nil Or No</span>
		<span class="subtitle">World Cup 2026 Zero-goal Match Checker</span>
	</h1>
	<main>
		<details class="about">
			<summary>About</summary>
			<h2>What?</h2>
			<p>This is a complete World Cup 2026 match schedule that tells you whether
			a match ended in a 0-0 draw. That&rsquo;s it!</p>
			<h2>Why?</h2>
			<p>I made this because my partner loves to watch World Cup matches but
			wants to skip the matches where nobody scores, because those (usually)
			aren&rsquo;t very exciting and there are <em>a lot</em> of matches.</p>
			<p>This site makes it easy to check on matches from the day to find out if
			you can get by with a the highlights instead of a 90-minute match.</p>
			<h2>Which matches can end in a 0-0 draw?</h2>
			<p>Only matches in the Group Stage (the first stage) can end in a 0-0
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

			$data    = json_decode( $matches_json );
			$matches = $data->matches;

			// Add a parseable datetime to each match so we can sort them properly.
			foreach ( $matches as &$match ) {
				preg_match( '/^(\d{2}:\d{2}) UTC([+-]\d+)$/', $match->time, $regex_matches );

				$match_time       = $regex_matches[1];
				$match_utc_offset = sprintf( '%+03d:00', (int) $regex_matches[2] ); // -6 => -06:00
				$match->datetime = new DateTimeImmutable( $match->date . 'T' . $match_time . ':00' . $match_utc_offset );
			}
			unset( $match );

			// Sort matches by date ascending.
			usort(
				$matches,
				function( $a, $b ) {
					return $a->datetime <=> $b->datetime;
				}
			);

			$output = '';

			if ( empty( $matches ) ) {
				echo '<p>Something&rsquo;s wrong&mdash;could not get matches data! 😩</p>';
			} else {
				$output .= '
				<details>
					<summary>Past Matches</summary>
					<div class="past-matches">
						<!-- Past matches will be moved in here by JS; only browser knows user time. -->
					</div>
				</details>
				<div class="future-matches">
				';

				$loop_round              = '';
				$in_future_and_new_round = false;

				// Loop through all matches.
				foreach( $matches as $index => $match ) {
					$match_round = $match->round;

					$current_time_in_match_timezone = new DateTime( 'now', $match->datetime->getTimezone() );
					$match_start_in_match_timezone  = $match->datetime;
					$match_end_in_match_timezone    = ( clone $match_start_in_match_timezone )->modify( '+ 2 hours' );

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

					$winning_team = 0;
					$nil_nil_draw = false;
					$score_string = '';

					// Calculate 0-0 and score.
					if ( isset( $match->score->ft[0] ) && isset( $match->score->ft[1] ) ) {
						$team_1_score = $match->score->ft[0];
						$team_2_score = $match->score->ft[1];

						$nil_nil_draw = ( 0 === $team_1_score && 0 === $team_2_score ) ?? false;
						$score_string = $team_1_score . '-' . $team_2_score;

						if ( $team_1_score > $team_2_score ) {
							$winning_team = 1;
						}
						elseif ( $team_2_score > $team_1_score ) {
							$winning_team = 2;
						}
					}

					// Rename all 'Matchday [n]' rounds into 'Group Stage.'
					if ( preg_match( '~Matchday~', $match->round ) ) {
						$match_round = 'Group Stage';
					}

					// If we're in the future and it's a new round, start hiding teams.
					if ( ! $in_future_and_new_round
						&& ( 'future' === $match_status && $loop_round !== $match_round ) ) {
							$output .= '<!-- Start hiding matchups! -->';
							$in_future_and_new_round = true;
					}

					// Close open day if this match is on a new day.
					if ( isset( $day ) && $match_start_in_match_timezone->format( 'd' ) !== $day ) {
						$output .= '</div>';
					}

					// Figure out if we need to show a new round heading.
					if ( empty( $loop_round ) || $loop_round !== $match_round ) {
						$loop_round = $match_round;

						// Figure out the last day for showing this round heading; this is
						// necessary for the moving/copying that happens in JS after all
						// matches load.
						switch ( $loop_round ) {
							case 'Group Stage':
								$round_start_day = '2026-06-11';
								$round_end_day   = '2026-06-27';
								break;
							case 'Round of 32':
								$round_start_day = '2026-06-28';
								$round_end_day   = '2026-07-03';
								break;
							case 'Round of 16':
								$round_start_day = '2026-07-04';
								$round_end_day   = '2026-07-07';
								break;
							case 'Quarter-final':
								$round_start_day = '2026-07-09';
								$round_end_day   = '2026-07-11';
								break;
							case 'Semi-final':
								$round_start_day = '2026-07-14';
								$round_end_day   = '2026-07-15';
								break;
							case 'Match for third place':
								$round_start_day = '2026-07-18';
								$round_end_day   = '2026-07-18';
								break;
							case 'Final':
								$round_start_day = '2026-07-19';
								$round_end_day   = '2026-07-19';
								break;
							default:
							  $round_start_day = '';
							  $round_end_day   = '';
						}

						$output .= '<h2
							data-round-start="' . $round_start_day  . 'T00:00:00"
							data-round-end="' . $round_end_day  . 'T00:00:00">' . $loop_round . '</h2>';
					}

					// Figure out if we need to show a new day heading.
					if ( ! isset( $day )
						|| ( isset( $day ) && $match_start_in_match_timezone->format( 'd' ) !== $day ) ) {
						$day = $match_start_in_match_timezone->format( 'd' );
						$output .= '<div data-day="' . $match_start_in_match_timezone->format( 'Y-m-d' ) . 'T00:00:00">
							<h3>' . $match_start_in_match_timezone->format( 'l, F d, Y' ) . '</h3>';
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

					$output .= '
					<div class="match">
					';

					// JavaScript will replace this time value with the user's local time,
					// but first output the match's start in its own timezone by default.
					$output .= '
						<time datetime="' . $match_start_in_match_timezone->format( 'c' ) . '">
							<span class="fallback-time">
								' . $match_start_in_match_timezone->format( 'ga' ) . '
								<br>
								<small>' . substr( $match_start_in_match_timezone->format( 'T' ), 0, -2 ) . '</small>
							</span>
						</time>
					';

					$team_1_class = ( 1 === $winning_team ) ? 'team--winner' : '';
					$team_2_class = ( 2 === $winning_team ) ? 'team--winner' : '';

					$output .= '
						<div class="match-details">
							<span class="teams" ' . $hidden_attr . '>
								<span class="team-1 ' . $team_1_class . '">' . $team_1_name . '</span>
								v.
								<span class="team-2 ' . $team_2_class . '">' . $team_2_name . '</span>
							</span>';

							if ( ! $show_teams ) {
								$output .= '<button data-action="reveal-teams">Reveal Teams</button>';
							}

							if ( 'playing' === $match_status ) {
								$output .= '<span class="status status--playing">⚽️ PLAYING!</span>';
							}
							else if ( 'completed' === $match_status ) {
								// $output .= '<span class="status status--complete">DONE!</span>';

								if ( $match_round === 'Group Stage' ) {
									if ( $nil_nil_draw ) {
										$output .= '<span class="zero-draw zero-draw--true" data-zero-draw="true" aria-hidden="true" hidden>0-0!</span>';
									}
									else {
										$output .= '<span class="zero-draw zero-draw--false" data-zero-draw="false" aria-hidden="true" hidden>NOT 0-0!</span>';
									}
									$output .= '<button data-action="reveal-zero-draw">Reveal if 0-0</button>';
								}

								$output .= '
									<span class="score" hidden aria-hidden="true">' . $score_string . '</span>
									<button data-action="reveal-score" hidden aria-hidden="true">Reveal Score</button>
								';
							}

							$output .= '
							<span class="group-and-ground">
								<span class="number">#' . ( $index + 1 ) . '</span> ';

							if ( ! empty( $match->group ) ) {
								$output .= '<span class="group"> &sdot; ' . $match->group . '</span> ';
							}

							$output .= '
								<span class="ground"> &sdot;' . $match->ground . '</span>
							</span>';

							$output .= '
						</div>
					</div>';
				}

				$output .= '</div>';

				echo $output;
			}
			?>
			</div>
		</div>
	</main>
	<div class="big-buttons">
		<button data-action="enable-score-reveal">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Pro v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2026 Fonticons, Inc.--><path d="M320.1 32C329.1 32 337.4 37.1 341.5 45.1L415.1 189.3L575 214.7C583.9 216.1 591.3 222.4 594.1 231C596.9 239.6 594.6 249 588.3 255.4L473.7 369.9L499 529.8C500.4 538.7 496.7 547.7 489.4 553C482.1 558.3 472.4 559.1 464.4 555L320.1 481.6L175.8 555C167.8 559.1 158.1 558.3 150.8 553C143.5 547.7 139.8 538.8 141.2 529.8L166.4 369.9L52 255.4C45.6 249 43.4 239.6 46.2 231C49 222.4 56.4 216.1 65.3 214.7L225.1 189.3L298.7 45.1L300.4 42.2C304.9 35.9 312.2 32 320.1 32zM320.1 368C302.4 368 288.1 382.3 288.1 400C288.1 417.7 302.4 432 320.1 432C337.8 432 352.1 417.7 352.1 400C352.1 382.3 337.8 368 320.1 368zM320.1 192C301.8 192 287.3 207.7 288.8 226L296.1 314C297.1 326.4 307.5 336 320 336C332.5 336 342.9 326.4 343.9 314L351.2 226C352.7 207.7 338.3 192 319.9 192z"/></svg>
			<span>Enable<br>Score Reveal</span>
		</button>
		<button data-action="reveal-all-scores" aria-hidden="true" hidden>
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M320 64C334.7 64 348.2 72.1 355.2 85L571.2 485C577.9 497.4 577.6 512.4 570.4 524.5C563.2 536.6 550.1 544 536 544L104 544C89.9 544 76.8 536.6 69.6 524.5C62.4 512.4 62.1 497.4 68.8 485L284.8 85C291.8 72.1 305.3 64 320 64zM320 416C302.3 416 288 430.3 288 448C288 465.7 302.3 480 320 480C337.7 480 352 465.7 352 448C352 430.3 337.7 416 320 416zM320 224C301.8 224 287.3 239.5 288.6 257.7L296 361.7C296.9 374.2 307.4 384 319.9 384C332.5 384 342.9 374.3 343.8 361.7L351.2 257.7C352.5 239.5 338.1 224 319.8 224z"/></svg>
			<span>Reveal<br>All Scores</span>
		</button>
		<button data-action="reveal-all-zero-draws">
			<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Pro v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2026 Fonticons, Inc.--><path d="M376 88C376 57.1 350.9 32 320 32C289.1 32 264 57.1 264 88C264 118.9 289.1 144 320 144C350.9 144 376 118.9 376 88zM179.7 245C180.9 242 183.9 240 187.1 240L223 240L200.3 330.6C192 363.8 211.3 397.6 244 407.4L340 436.2L290.8 547C283.6 563.1 290.9 582.1 307 589.2C323.1 596.3 342.1 589.1 349.2 573L405.8 445.6C417.5 419.2 403.4 388.4 375.7 380.1L300.3 357.5L321 287.1L331 304.2C342.5 323.9 363.5 336 386.3 336L447.9 336C465.6 336 479.9 321.7 479.9 304C479.9 286.3 465.6 272 447.9 272L386.3 272L353.5 215.7C339.2 191.1 312.9 176 284.4 176L187.1 176C157.7 176 131.2 193.9 120.2 221.3L98.3 276.1C91.7 292.5 99.7 311.1 116.1 317.7C132.5 324.3 151.1 316.3 157.7 299.9L179.7 245zM167.8 452.6C165.9 458 162.5 462.9 158 466.5L75.6 534.5C62 545.7 60 565.9 71.3 579.5C82.6 593.1 102.7 595.1 116.3 583.8L198.7 515.9C212.1 504.9 222.2 490.4 228 474.1L234.9 454.8L230.2 453.4C209.8 447.3 192.3 435.8 179 421L167.7 452.7zM512 608C547.3 608 576 579.3 576 544C576 508.7 547.3 480 512 480C476.7 480 448 508.7 448 544C448 579.3 476.7 608 512 608z"/></svg>
			<span>Reveal All<br>0-0 or No</span>
		</button>
		<button class="button--icon-only" data-action="reload" aria-label="Reload">
			<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Pro v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2026 Fonticons, Inc.--><path d="M500.7 138.7L512 149.4L512 96C512 78.3 526.3 64 544 64C561.7 64 576 78.3 576 96L576 224C576 241.7 561.7 256 544 256L416 256C398.3 256 384 241.7 384 224C384 206.3 398.3 192 416 192L463.9 192L456.3 184.8C456.1 184.6 455.9 184.4 455.7 184.2C380.7 109.2 259.2 109.2 184.2 184.2C109.2 259.2 109.2 380.7 184.2 455.7C259.2 530.7 380.7 530.7 455.7 455.7C463.9 447.5 471.2 438.8 477.6 429.6C487.7 415.1 507.7 411.6 522.2 421.7C536.7 431.8 540.2 451.8 530.1 466.3C521.6 478.5 511.9 490.1 501 501C401 601 238.9 601 139 501C39.1 401 39 239 139 139C238.9 39.1 400.7 39 500.7 138.7z"/></svg>
		</button>
	</div>
	<script>
	// Move yesterday's matches into 'Past Matches.'
	const today = new Date();
	today.setHours(0, 0, 0, 0);

	const pastMatchesContainer = document.querySelector('.past-matches');
	const futureMatchesContainer = document.querySelector('.future-matches');
	document.querySelectorAll('.future-matches > *').forEach((item) => {
		// Copy headings into 'Past Matches' if they should show before today.
		if (item.dataset.roundStart) {
			if (new Date(item.dataset.roundStart) < today) {
				pastMatchesContainer.appendChild(item.cloneNode(true));
			}
			if (new Date(item.dataset.roundEnd) < today) {
				item.remove();
			}
		}
		// Copy matches with a day before today into the 'Past Matches' box.
		else if (item.dataset.day) {
			if (new Date(item.dataset.day) < today) {
				pastMatchesContainer.appendChild(item.cloneNode(true));
				item.remove();
			}
		}
	});

	futureMatchesContainer.classList.add('loaded');

	// Fill in local (browser) time for all match start times.
	document.querySelectorAll('time').forEach((timeElement) => {
		const matchTime = new Date(timeElement.dateTime);

		// Turn time into parts.
		const parts = new Intl.DateTimeFormat(undefined, {
			hour: 'numeric',
			hour12: true,
			timeZoneName: 'short',
		}).formatToParts(matchTime);

		// Format time: 8pm
		const hour = parts.find(p => p.type === 'hour').value;
		const ampm = parts.find(p => p.type === 'dayPeriod').value;
		const time = (hour + ampm).toLowerCase();

		// Get timezone.
		let zone = parts.find(p => p.type === 'timeZoneName').value ?? '';

		// Use shortened version of timezone if possible.
		zone = zone
			.replace(/^PDT$|^PST$/, 'PT')
			.replace(/^MDT$|^MST$/, 'MT')
			.replace(/^CDT$|^CST$/, 'CT')
			.replace(/^EDT$|^EST$/, 'ET');

		timeElement.innerHTML = `${time} <small>${zone}</small>`;
	});

	// Handle button clicks.
	revealAllZeroDrawsButton = document.querySelector('button[data-action="reveal-all-zero-draws"]');
	enableScoreRevealButton = document.querySelector('button[data-action="enable-score-reveal"]');
	revealAllScoresButton = document.querySelector('button[data-action="reveal-all-scores"]');

	document.querySelectorAll('button').forEach((button) => {
		button.addEventListener('click', (event) => {
			event.preventDefault();

			switch (button.dataset.action) {
				case 'reload':
					button.classList.add('reloading');
					setTimeout(() => {
						window.location.reload();
					}, 550);
					break;

				case 'reveal-zero-draw':
					button.hidden = true;
					button.ariaHidden = true;
					button.previousElementSibling.hidden = false;
					button.previousElementSibling.ariaHidden = false;
					break;

				case 'reveal-score':
					button.hidden = true;
					button.ariaHidden = true;
					button.closest('.match-details').classList.add('reveal-score');
					button.previousElementSibling.hidden = false;
					button.previousElementSibling.ariaHidden = false;
					button.closest('.match-details').querySelector('.zero-draw').hidden = true;
					button.closest('.match-details').querySelector('.zero-draw').ariaHidden = true;
					break;

				case 'reveal-all-zero-draws':
					button.disabled = true;
					button.ariaHidden = true;
					document.querySelectorAll('[data-zero-draw]').forEach((element) => {
						element.hidden = false;
						element.ariaHidden = false;
					});
					document.querySelectorAll('button[data-action="reveal-zero-draw"]').forEach((element) => {
						element.hidden = true;
						element.ariaHidden = true;
					});
					break;

				case 'reveal-teams':
					button.hidden = true;
					button.ariaHidden = true;
					button.previousElementSibling.hidden = false;
					button.previousElementSibling.ariaHidden = false;
					break;

				case 'enable-score-reveal':
					button.hidden = true;
					button.ariaHidden = true;
					revealAllScoresButton.hidden = false;
					revealAllScoresButton.ariaHidden = false;
					revealAllZeroDrawsButton.disabled = true;
					revealAllZeroDrawsButton.ariaHidden = true;
					document.querySelectorAll('button[data-action="reveal-zero-draw"]').forEach((element) => {
						element.hidden = true;
						element.ariaHidden = true;
					});
					document.querySelectorAll('button[data-action="reveal-score"]').forEach((element) => {
						element.hidden = false;
						element.ariaHidden = false;
					});
					break;

				case 'reveal-all-scores':
					button.disabled = true;
					button.ariaHidden = true;
					document.querySelectorAll('.match-details').forEach((element) => {
						element.classList.add('reveal-score');
					});
					document.querySelectorAll('.score').forEach((element) => {
						element.hidden = false;
						element.ariaHidden = false;
					});
					document.querySelectorAll('button[data-action="reveal-score"]').forEach((element) => {
						element.hidden = true;
						element.ariaHidden = true;
					});
					document.querySelectorAll('button[data-action="reveal-zero-draw"]').forEach((element) => {
						element.hidden = true;
						element.ariaHidden = true;
					});
					document.querySelectorAll('.zero-draw').forEach((element) => {
						element.hidden = true;
						element.ariaHidden = true;
					});
					break;
			}
		});
	});
	</script>
</body>
</html>
