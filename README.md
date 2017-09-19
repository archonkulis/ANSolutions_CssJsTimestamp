# ANSolutions_CssJsTimestamp
Tired of hearing "Why I don't see the newest changes" and answering "Have you tried clearing browsers cache"?

This extension adds a timestamp to css/js files in Magento so that customers will receive newest css/js files without the need of clearing browsers cache.

# Adds timestamp to css/js files to update them with newest version
Before:

`<link rel="stylesheet" type="text/css" href="https://www.example.com/js/example.css" />`

After:

`<link rel="stylesheet" type="text/css" href="https://www.example.com/js/example.css?t1505808146" />`

# Change timestamp
To force timestamp change, go to System -> Cache Management -> click on "Flush Browser Cached CSS/JS"

Now timestamp will be updated and the customers will see newest css/js changes!


Inspired by https://github.com/mklooss/Loewenstark_Head/
