# PIL Project

> A real project in the real life

## Learning objectives

At the end of this challenge you should be able to :

-   Build your own theme for a CMS
-   Create a fancy client interface with custom fields
-   Follow a design pixel perfect

## Presentation

You work at the PIL, but have you ever made a search on Google to watch their website? So if you did, you should see that this one doesn't match at all with the current criterias...

Few months ago, the PIL decided to build a completely new image and to be more present on the Internet. They began their rebranding with a new logo, black and white. After that, they contacted a web designer to design a website based on their new image.
After months of discussion, they validated the design and the future features of the website.

It's at this moment you take action ! The PIL contacted BeCode to build this new website 🥳.

This a great opportunity for you to code a real project with a real client.

## Client's request

The PIL employees would like to edit the content of their website regularly & easily. That’s why a CMS is the best solution.

They ask for a WordPress interface because is easy to understand, and you can create custom fields easy to fill in.

:warning: **This project needs to be customer-oriented. The dashboard for the client has to be clear, easy to use and match the design.**

To help you, the web designer gives you the license _ACF PRO_, a WordPress plugin that will provide you the possibility to create _custom fields_.

<details><summary>License</summary>
`b3JkZXJfaWQ9OTAwODJ8dHlwZT1kZXZlbG9wZXJ8ZGF0ZT0yMDE2LTA5LTIwIDIxOjI0OjAz`
</details>

Due to the high standards of the design, the client would like you to respect it strictly.

## Design

The design in JPG with the different formats, as well as the images and SVG's, are located inside the folder [resources](./resources/).

The different design formats provided are in Desktop, Tablet portrait (768px) and Mobile (375px).

> If some elements (images, svg) are missing, tell it to your coach.

### Fonts

You can find the fonts in this [dropbox](https://www.dropbox.com/sh/rs3v7lhind6nh7r/AACPXVpgVVg7TP8WN7a55nK8a/Fonts?dl=0&lst=)

### Favicon

What is a favicon ? [Here an explanation](https://www.seoptimer.com/blog/what-is-a-favicon/)

You can find the favicons in the [dropbox](https://www.dropbox.com/sh/rs3v7lhind6nh7r/AAB1idUr8-KSt_qy-_mrRp7Ka/Favicon?dl=0&subfolder_nav_tracking=1)

### Broken dropbox links?
You can find all dropbox sources [here](https://www.dropbox.com/sh/rs3v7lhind6nh7r/AABY8VdfukGrV2rjeJqsvNIga?dl=0).

---

## Instructions

Here a link with the design and the [Briefing for the devs](https://xd.adobe.com/view/6128d838-cd50-44b0-a466-6c0177ba8302-347b/screen/c24caf46-b49b-4b6c-98dd-a62cfb9d9ada/)

On the design all the "golden point" refer to an instruction. They were given by the designer. Most of them explain which ACF(Advanced Custom Field) you have to use or the UI effects.

We hardly advice you to begin the job by the WordPress structure using the dashboard. When you edit the dashboard, you edit the database. So create the contents types (pages, posts, categories) before coding the templates.

### Templates

You will have 5 differents pages.

Here the templates :

-   `front-page.php`
-   `archive-entreprises.php`
-   `page-espaces.php`
-   `page-pole.php`
-   `page-contact.php`

The page "Formations" is in the menu but the link behind send the user to an another platform. So you have to create a custom link.

### Post type

There is one post type called "Entreprises".

[This page](https://xd.adobe.com/view/6128d838-cd50-44b0-a466-6c0177ba8302-347b/screen/cfe3b5d9-4625-4daf-a2ef-5eee33584263/) is the archive of this post type.

Each company has **one category** and **one or more sub-categories**.

The companies and the main categories are called in the front-page.

> We recommend to use the plugin [CPT UI](https://fr.wordpress.org/plugins/custom-post-type-ui/) to create easily posts types and their categories.

### Categories

Each category has a logo (a svg) attached to it.

These logos are displayed on the front-page in the section "Vous avez un projet audiovisuel ou digital?".

To link a logo to a category, you have to create a Custom fields in the categories for the post type "Entreprises".

### The Footer & Call to Action

#### Footer

Like the header, the footer is repeated in all the pages, so the client has to complete these informations once.

ACF allow you to create fields you can use globally with the [Options Page feature](https://www.advancedcustomfields.com/resources/options-page/).

#### CTA

You can find the Call to action on the bottom of the pages "Nos espaces" and "Le Pôle".

So again, Don't Repeat Yourself, you can use a section in the Options page to create the custom fields for this part.

> Advice : Use a custom template (template part) in your theme to code this CTA in order to DRY.

## Advice :shipit:

-   Begin by creating your pages, your post types and option page in order to make the menu and the footer.
-   Check the design ! You have some repetitive parts, so don't repeat yourself, keep your code in "template-parts".
-   Take attention to have a good HTML structure.
-   When you make the CSS, think to zoom and de-zoom to see if everything is ok.
-   Have fun !

## Team Follow-up

Like we said in class, during this project, all groups are going to have their organization method. Some parts are going to be general, for all groups, and other parts are free for each team.
So let's look at our schedule:

> Project duration : 2 weeks, aka 10 work-days

-   **Day 1: ONLY ORGANIZATION**
    Choose a tool with your team, could be Trello, GitHub Project in your repo, or anything else.
    Make a **list of all the tasks** you have to do: Which pages? How are they linked to each other? Do we have repetitive parts?
    Once this is done, separate each task into smaller tasks: Ex: _This page is made from 3 sections, 2 of them containing images, with difficult positionning, and 1 has a big animation_
    Finally, **prioritize**. Which task is the most important? Which do we have to begin with? Displaying the page content and allow the user to use Custom Fields is more important that all the animations!

    > Make your organization board validated by a coach before going to the next steps

    <br>

-   **Day 2: THEORY (optional)**
    You just had an entire week focusing on the theory: how wordpress works, create your own theme, using ACF. Plus, you could have acces to the design before beginning the project.
    Now that you have a better idea of your taks, you can take a bit of time to learn more theory if needed. This should not take more than half a day, BIG MAXIMUM the whole day
    <br>

-   **Day 3-9: WORKFLOW**

    -   **Every morning**, do a little meeting with your group:
        -> What did every member do yesterday?
        -> What's the program for today?
        -> Issues to share?
        During the day, your team might be focused, therefore, a good practise is to add yourself to the task you are doing on your organization board (on Trello, for ex, you can attribute a task to yourself, so your team knows on what you are working)
    -   Like on the previous project, there will be 1 spokesperson per group. **Every few days**, that person will go into a meeting with the clients(coaches) to inform them about the advancement of the project.
    -   _Reminder: When you are working on a page, a task or a feature, do not work on the good version of your project. Instead, create a new branch, test out your work, and then, if the team approves, push it to the main branch (aka gitflow)_
    -   In the beginning, you are not looking to code best practices. Your main goal is to have most of the functionnalities. You have to give your client a beautiful visual and easy interface at the deadline. Your client won't care how many lines of code you have...
        <br>

-   **Day 10: PUBLISH**
    There is no obligation, look out on the internet where to host a Wordpress project. You may have conflicts or bugs when hosting, or special code to add according to the platform you are hosting on. So don't wait until 16:45 to do that.
