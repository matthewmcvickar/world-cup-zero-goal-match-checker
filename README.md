# World Cup Zero-goal Match Checker

⚽️ 🏆 **Check if World Cup matches ended without anybody scoring.** 0️⃣ 🧐

Live at [matthewmcvickar.com/zero-goal-checker][production].

## Explanation

I made this because my partner loves to watch World Cup matches but wants to
skip the matches where nobody scores, because those aren't as exciting and there
are *a lot* of matches.

This site makes it easy to check on matches from the day to find out if you can
get by with the highlights instead of watching a full 90-minute match.

## Credits

Built by [Matt McVickar][my-website], a software engineer in Portland, OR, US.

The World Cup match data comes from the [openfootball worldcup.json
project][worldcupjson]. New data is fetched and saved to a local JSON file
whenever the page loads, as long as it has been at least five minutes since the
last time it was fetched.

[production]: https://matthewmcvickar.com/zero-goal-checker/
[my-website]: https://matthewmcvickar.com
[worldcupjson]: https://github.com/openfootball/worldcup.json
