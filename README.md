# fb-api-search

run composer require facebook/graph-sdk



How to get a Facebook Page Access Token that doesn't expire Never!

- Go to http://developers.facebook.com/tools/explorer/
- Get a User Access Token with a permission "manage_pages"
- Convert this short-lived access token into a long-lived one by making this Graph API call: 
  https://graph.facebook.com/v2.6/oauth/access_token?client_id=<your FB App ID >&client_secret=<your FB App secret>&grant_type=fb_exchange_token&fb_exchange_token=<your short-lived access token>
- Make a call Graph API:
  https://graph.facebook.com/v2.6/<your personal account FB user id>/accounts?access_token=<your long-lived access token>
- The returned access_token has no expiration unless you change your password or not more admin of the target page or deauthorize FB page
