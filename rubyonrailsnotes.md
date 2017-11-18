# Notes from Tutorial
Tutorials from https://youtu.be/0Vfk8jk6S90?list=PLgYiyoyNPrv81SdYk-eoMFacl-CJTO_xa <hr>
Scaffold vs. Manual <br>
Better to use generators than to use scaffolds 

# Scaffold Generator guide
_rails g scaffold Project title:string description:text percent_complete:decimal_ //Creates a scaffold with name Project in the database with Create Edit Delete models. In my case since the My project is named Project, the word Project is reserved by ruby so the codes gave me<br>
**invoke  active_record
The name 'Project' is either already used in your application or reserved by Ruby on Rails. Please choose an alternative and run this generator again** <br>as a feedback So I used 
_rails g scaffold Campaign title:string description:text percent_complete:decimal_ so that each project is called a Campaign. That worked out perfectly. 

Always be sure to use the **DRY** principle
**Don't**
**Repeat** 
**Yourself** 

# The Rails Console
To be able to preview codes without browser or going to view database. 
_rails c_ opens the console<br>
_rails c --sandbox_ opens the console but then when you exit, all changes are rolled back. That not withstanding any external call will be carried out since they have no bearing with the local database. 

**Generating records in the Console**
Now some ruby codes <br>
_//> 10.times do |campaign|<br>
//> Campaign.create!(title: "Campaign #{campaign}", description: "My cool description")<br>
//>end_<br>
This creates 10 campaigns<br>
_Campain.all_ in console lists all campaign . Risky to run this with a huge database. 
Better to run _Campaign.count_ to know the number of campaigns without any further details
To see the last Campaign run _Campign.last_ to see the last campaign with details. Same applies to _Campaign.first_.
One may choose to update it by using 

[![forthebadge](http://forthebadge.com/images/badges/built-with-love.svg)](https://nixce.com)
