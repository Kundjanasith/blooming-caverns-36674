curl -X POST \
-H 'Content-Type:application/json' \
-H 'Authorization: Bearer {Wn8RaZMfej8XT1pW7St5i+ygTIYeqxZPZDgn5gpx3lKzTISTkHj+7FwQbXkju0Cg2uh9VTL9N8icn1ZFudk5UNSl7SgN12wEhqDQsO6sXy2/QRFBAhjJLVJWHiXxBjHg8kUG7OWByjUcRCywqQOZVQdB04t89/1O/w1cDnyilFU=}' \
-d '{
    "replyToken":"nHuyWiB7yP5Zw52FIkcQobQuGDXCTA",
    "messages":[
        {
            "type":"text",
            "text":"Hello, user"
        },
        {
            "type":"text",
            "text":"May I help you?"
        }
    ]
}' https://api.line.me/v2/bot/message/reply
