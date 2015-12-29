# P4 
## Git Repository [On GitHub](http://github.com/jpedroza/laravelvideobooks.aacax.net.git)
##Website on Digital Ocean [Project 4](http://laravelvideobooks.aacax.net)

#P4 Planning Doc (v3)
###[Project 4 Planning Doc v1](http://laravelvideobooks.aacax.net/pd1.doc)
###[Project 4 Planning Doc v2](http://laravelvideobooks.aacax.net/pd2.doc)
##App Title: Laravel Video Books 
##Purpose: To Make A Functional Video Repository
This Web Application is being constructed as a generic functional prototype to serve as a visual folio of sorts. 
For me, it is always a challenge to stay on track with schedules, appointments, and deadlines; 
however, the more challenging parts are the simple things like remembering how I did that sometime ago. 
I get a lot of benefit by being able to watch and replay short video segments I leave myself like a "video diary." 
Many of the common tasks I learn, I write down, scribble over and over on post-it-notes, put in notebooks or files, 
but of course, I put these away in the most secure places so I don't lose them - so secure, I can't find them myself. 
As Reading is not my fastest or preferred way, a visual reminder is priceless to me.     
##Description
My Web Application is to be a small video repository for people that need visual animated walk-throughs, demonstrations, and refreshers to help as a guide through functional processes or tasks. 
This unique implementation will hold various media files demonstrating recurring processes or tasks.
##Essential Features
*users must be able to create an account and login
*users must be able to play mp4 videos
*users should be able to submit comments and suggestions
##Non-essential Features
*users should be able to search for videos
*users can send sms text notices to site administrators
*users can send sms text requests for help
##To do
1.[ ] Complete this document 
2.[ ] Create new Laravel project locally
3.[ ] Version Control
4.[ ] Initiate project as a new git repo
5.[ ] Create a new repo on Github.com
6.[ ] Connect your project to this new repo on Github
7.[ ] Set up local server to point to this project, whether it be just pointing your localhost doc root to the project, or setting up a local domain to run it.
8.[ ] Add necessary controllers
9.[ ] Build routes, connecting to Controllers. For now, just echo out some simple strings from your controller methods so you can just test that all your routes are working.
10.[ ] Database
11.[ ] Create your local database
12.[ ] Fill in your local db credentials in .env
13.[ ] Set up and run your Migrations to build your database tables
14.[ ] Set up and run your Seeders to fill your database tables with sample data
15.[ ] Deploy your project to DigitalOcean (do this early, so any issues can be addressed sooner rather than later)
16.[ ] Set up a new DNS for the project in Namecheap
17.[ ] Git clone the project into /var/www/html/
18.[ ] Run `composer install` to pull in vendors
19.[ ] Set up your production .env file
20.[ ] Make necessary permission changes to storage/ and bootstrap/cache/
21.[ ] Update your 000-default.conf file to add a new VirtualHost block for this project. Restart apache.
22.[ ] Test your project is working on DigitalOcean.
23.[ ] Database
24.[ ] Create a database
25.[ ] Update your live .env file with the appropriate database credentials
26.[ ] Run your migrations and seeders
27.[ ] Build a starting master layout view including the essentials, for ex, doctype, head, body, place for navigation, etc. Don't focus too much on design yet.
28.[ ] Maintain a continuous feedback communication loop with advisors/stakeholders
29.[ ] Interview students, Teaching Assistants, and Instructor to see what common problems can be addressed to plan out what users will see value in from positive user experience
30.[ ] Conduct and record research leveraging Course Discussion Boards, Piazza, and Slack Chat to converge on to perform a needs gap analysis
31.[ ] Consolidate and streamline essential objectives - "understanding that the user is not me"
32.[ ] Build a backward planning document with sub-objectives and tentative dates 
33.[ ] Leverage a design-build-test-revamp process to expedite smaller objective/productive builds
34.[ ] Plan and out CRUD functionality for Messaging <=========== P4 Table 1
35.[ ] Sketch-out and define function interactions with tables fields and methods
36.[ ] Generate Mockups, Get User Feedback, and Adjust Accordingly
37.[ ] Create user table to hold usernames, password, hashes, and session tokens
38.[ ] Create Landing Page
39.[ ] Create Sign-up/in Form - the features are already built it
40.[ ] Draft out process steps to create an account and login
41.[ ] Integrate functionality with Laravel
42.[ ] Design/Build the Database Structures needed to hold media file links<=========== P4 Table 2
43.[ ] Generate Mockups, Get User Feedback, and Adjust Accordingly
44.[ ] Sketch-out and define function interactions with tables fields and methods
45.[ ] Build sample flash mock up material
46.[ ] Create the search functionality for topics
47.[ ] Plan and out CRUD functionality
48.[ ] Build functionality
49.[ ] Test, Correct, Integrate, Test, Verify, Record Configuration, Conduct Future Planning
50.[ ] Generate Mockups, Get User Feedback, and Adjust Accordingly
51.[ ] Sketch-out and define function interactions with tables fields and methods
52.[ ] Create the play functionality for topics
53.[ ] Plan and out functionality implementation to play
54.[ ] Build functionality
55.[ ] Test, Correct, Integrate, Test, Verify, Record Configuration, Conduct Future Planning
56.[ ] Based on time left decide on further implementation on non-essential features. 
57.[ ] Generate Mockups, Get User Feedback, and Adjust Accordingly
58.[ ] Work on polishing the design/CSS/interface. 
59.[ ] Generate Mockups, Get User Feedback, and Adjust Accordingly
60.[ ] Update DigitalOcean version of project with final changes. Run any new migrations/seeders as needed.
61.[ ] Have a friend or family member use your site to test for any bugs or usage issues.
62.[ ] Make any needed adjustments and re-deploy any changes.
63.[ ] Submit Github URL in Canvas to complete your project.

##Route Plan
*Purpose	Method	URI
*Homepage as a User	GET	/video/index
*Homepage as a User to Comment	POST	/video/comment
*View Videos as an Admin	GET	/video/login
*Add Videos as an Admin	GET	/video/add
*Add Videos as an Admin	POST	/video/add
*Edit Videos as an Admin	GET	/video/edit
*Edit Videos as an Admin	POST	/video/add
*Delete Videos as an Admin	GET	/video/delete
*Delete Videos as an Admin	POST	/video/delete
##Database sketch

###Table name: videos
Description: This table holds all video files 
Fields:
*(int, primary key, auto_increment) id
*(timestamp) created_at
*(timestamp) updated_at 
*(text) title
*(text) description
*(text) link
*(text) thumbnail
*(text) author

###Table name: authors
Description: This table holds info on contributors
Fields:
*(int, primary key, auto_increment) id
*(timestamp) created_at
*(timestamp) updated_at 
*(text) firstname
*(text) lastname

###Table name: metadata
Description: This table holds info on contributors
Fields:
*(int, primary key, auto_increment) id
*(timestamp) created_at
*(timestamp) updated_at 
*(text) searchterm

##Misc
The identified persona that this is intended for, is someone with learning disabilities or complex memory problems. Within the last 25 years, new advancements to body armor for military and vehicle armor have made it possible for service members to survive catastrophic injuries that would have been fatal about 25 years ago.

For example, long after the wounds of war have healed from the physical injuries, outside of prosthetics, bandages, pins, screws, and leaving the hospital, the world is now different and changed for those suffering from Traumatic Brain Injury.

Even today, football players have joined together to bring to the front unique injuries that you really can't see. In many cases, as it is not readily apparent, the hidden injuries walk among us, in confusion and in a cloud. There is even a movie about Brain Injury and its impacts. The movie is called "Concussion" and start Will Smith, coming out on Christmas Day I think. 

It is a challenge for me today, as I once served as an officer in the military, and to this day I still have not recovered my memory of who I am or was at one time. I was found by a medical board more than 20 years ago to be "Mentally Incompetent" and was separated from service. Despite the time, I still work and push as best I can to maintain what capacities I have, and the very best things that work for me are visual, audio, and animations. I still can't read or type very well, but I can manage, if I have the right tools and materials when I have them.

Sometime ago I graduated, from West Point, I was an Electrical Engineer, a Professor, and an Officer. Today, I am proud to have done all those things, but I don't remember doing them. Despite all this I am happy and appreciative, that I am alive for a little bit longer - Always Optimistic, as so many others suffer in poverty, and it can always be worse. Thank You for Your time and Consideration. Have A Great Day! 

