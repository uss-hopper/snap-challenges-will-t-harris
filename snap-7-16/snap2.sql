SELECT tweet.tweetContent, profile.profileAtHandle
FROM tweet INNER JOIN profile
on tweet.tweetProfileId = profile.profileId
WHERE tweet.tweetId = 0536faef082b454e9d444cdbe7887d7a;