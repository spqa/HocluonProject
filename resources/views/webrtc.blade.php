<!DOCTYPE html>
<html>
<head>
<title>Webrtc</title>
    <script src='//static.opentok.com/v2/js/opentok.min.js'></script>
</head>
<body>

<h1>Webrtc Tokbox</h1>
<p>This is a paragraph.</p>
<script>
    var apiKey = '45543832';
    var sessionId = '1_MX40NTU0MzgzMn5-MTQ2MDEzMjMwNTMyNX4yRWZDbWUxNHFOVTVyK1VSTWN3alc2akl-fg';
    var token = 'T1==cGFydG5lcl9pZD00NTU0MzgzMiZzaWc9NzZkYTBlZTcxNWUwMzc1Mjg0YjdhZWFmNmU3YTcyNWI1YTI2ZmI4NTpyb2xlPXB1Ymxpc2hlciZzZXNzaW9uX2lkPTFfTVg0ME5UVTBNemd6TW41LU1UUTJNREV6TWpNd05UTXlOWDR5UldaRGJXVXhOSEZPVlRWeUsxVlNUV04zYWxjMmFrbC1mZyZjcmVhdGVfdGltZT0xNDYwMTMyMzIwJm5vbmNlPTAuNjQ3NDc4MjI1MTUzMzI2NSZleHBpcmVfdGltZT0xNDYyNzI0MjM0JmNvbm5lY3Rpb25fZGF0YT0=';
    var session = OT.initSession(apiKey, sessionId);
    session.on({
        streamCreated: function(event) {
            session.subscribe(event.stream, 'subscribersDiv', {insertMode: 'append'});
        }
    });
    session.connect(token, function(error) {
        if (error) {
            console.log(error.message);
        } else {
            session.publish('myPublisherDiv', {width: 320, height: 240});
        }
    });
</script>
</body>
</html>