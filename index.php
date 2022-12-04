<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>World Cup 2022 Zero-goal Match Checker</title>
  <style>
  body {
    font-family: 'Avenir Next', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
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
    margin-top: 1.25rem;
    margin-bottom: -.25rem;
    text-transform: uppercase;
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
    font-size: 16px;
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

  main p {
    margin-left: 50px;
    text-indent: -50px;
  }

  main p span {
    display: inline-block;
    text-indent: 0;
  }

  .time {
    width: 50px;
  }

  .matchup {
    font-weight: 600;
    margin-right: 6px;
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

  .not-zero-goal-match {
    color: darkgreen;
  }

  footer {
    margin-top: 2rem;
  }
  </style>
</head>
<body>
  <h1>
    ⚽️&ensp;World Cup 2022&ensp;🏆<br>
    0️⃣&ensp;Zero-goal Match Checker&ensp;🧐
  </h1>
  <main>
    <p class="note">Note that only Group Stage matches can end 0–0.</p>
    <?php
    // Save the JSON response to a local file periodically so that we don't
    // overload the API server.
    if ( file_exists( 'matches.json' ) && filemtime( 'matches.json' ) > strtotime( '5 minutes ago' ) ) {
      $matches_json = file_get_contents( 'matches.json' );
    }
    else {
      if ( $matches_json = file_get_contents( 'https://worldcupjson.net/matches/' ) ) {
        file_put_contents( 'matches.json', $matches_json );
      }
      else {
        $matches_json = file_get_contents( 'matches.json' );
      }
    }

    $matches = json_decode( $matches_json );
    $output = '';

    if ( empty( $matches ) ) {
      echo '<p>Something&rsquo;s wrong&mdash;could not get matches data! 😩</p>';
    } else {
      $output .= '<details><summary>Past Matches</summary>';
      $past_matches_section_open = true;

      // Loop through all matches.
      foreach( $matches as $match ) {
        $date = strtotime( $match->datetime );

        // Don't show unscheduled matches.
        if ( $match->status === 'future_unscheduled' ) {
          continue;
        }

        // If this match happens today or in the future, then close the 'Past
        // Matches' section.
        if ( $past_matches_section_open && date( 'Ymd', $date ) >= date( 'Ymd' ) ) {
          $past_matches_section_open = false;
          $output .= '</details>';
        }

        // Figure out if we need to show a new stage heading.
        if ( ! isset( $stage ) || $stage !== $match->stage_name ) {
          $stage = $match->stage_name;
          $output .= '<h2>' . $stage .  '</h2>';
        }

        // Figure out if we need to show a new day heading.
        if ( ! isset( $day )
          || ( isset( $day ) && date( 'd', $date ) !== $day ) ) {
          $day = date( 'd', $date );
          $output .= '<h3>' . date( 'l, F d, Y', $date ) .  '</h3>';
        }

        // Show match info.
        $output .= '
          <p>
            <span class="time">' . date( 'ha', $date ) . '</span><!--
            --><span class="matchup">' . $match->home_team->name . ' v. ' . $match->away_team->name . '</span>
        ';

        if ( $match->status === 'in_progress' ) {
          $output .= '<span class="status in-progress">IN PROGRESS!</span>';
        }
        else if ( $match->status === 'future_scheduled' ) {
          $output .= '<span class="status upcoming">UPCOMING!</span>';
        }
        else if ( $match->stage_name === 'First stage' ) {
          else if ( $match->home_team->goals === 0 && $match->away_team->goals === 0 ) {
            $output .= '<span class="status zero-goal-match">0-0! 😕</span>';
          }
          else {
            $output .= '<span class="status not-zero-goal-match">NOT 0-0! ⚽️</span>';
          }
        }

        $output .= '</p>';
      }

      echo $output;
    }
    ?>
  </main>
  <footer>
    <details>
      <summary>About This Site</summary>
      <h2>Who made this?</h2>
      <p>This was built by <a href="https://matthewmcvickar.com">Matthew McVickar</a>,
      a software engineer in Portland, OR, US.</p>
      <h2>How does it work?</h2>
      <p>The code is <a href="https://github.com/matthewmcvickar/world-cup-zero-goal-match-checker">open source on GitHub</a>.</p>
      <p>The World Cup match data comes from the <a href="https://worldcupjson.world/">World Cup JSON project</a>.
      New data is fetched and saved to a local JSON file whenever this page
      loads, as long as it has been at least five minutes since the last time
      it was fetched.</p>
      <h2>Why do this?</h2>
      <p>I made this because my partner is watching a lot of the World Cup but
      skipping the matches where nobody scores, because those aren&rsquo;t as
      exciting and there are <em>a lot</em> of matches.</p>
      <p>This is a good way to check on the matches that happened overnight or
      while you were working and know if you can get by with a 90-second
      highlight instead of a 90-minute match.</p>
    </details>
  </footer>
</body>
</html>
