Empage
======

Empty Page Component for Joomla 3 with SEF friendly URLs.

This component when installed into your joomla CMS will allow you to display a blank page without any article content. Why would you want this? Well...

- Speed up loading time as we don't need to load an article
- Allows for the page structure to consist of modules only

and I have now got a "working" sh404sef plugin created that allows the urls to be translated into the title alias you use on that menu item. 

Installation Instructions
======

Now to install the component and plugin (only install plugin if you need it for sh404sef) follow these steps:

1) Download Empage from here
2) Extract files into a folder 
3) Individually "compress" (mac) or "send to compressed folder"(windows) these two folders:

- com_empage
- sh404sef plugin

4) Log into your joomla admin
5) Go to your extensions -> extensions manager
6) Upload com_empage.zip using the joomla installer

(Skip this step if you are not using sh404sef)
7) IUpload sh404sef.zip using the joomla installer

Simple, fast, and a lifesaver for many people out there hopefully! 

Inspiration
======

For this project I was inspired by the Blank Component created by Omar Muhammad, but sadly after using his component I hit  major brick wall with Sh404Sef which i needed to use for my metadata goodness. 

Also just as a normal plugin without Sh404sef Omar's component had no router for sef urls so it just lacked that edge.

I'll give it to him the idea was a great step forward and hopefully I've helped fill in the gaps.