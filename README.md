## About Zipcodes API

Zipcodes is a API for Mexico


### Process

Looking at how to gain response speed I evaluated several options trying to read files forming a syntax for the files, I found that it would be more complex besides concatenating the file names, reading the files, processing arrays would be very time consuming, determined to use SQlite with help of a DB tool to import from csv to the zipcodes table, add some minor adjustments to the eloquent model and that's it, add a resource to shape the response, I got good response times
