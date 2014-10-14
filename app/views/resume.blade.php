@extends('layouts.master')

@section('title')
@parent
Resume | Christoper A. Rubio
@stop

@section('content')
<div class="resume-content row group cards">
    <section class="col span12">
        <header itemscope itemtype="http://schema.org/Person" class="row group card">
            <a class="pull-left" href="http://www.linkedin.com/in/christopherrubio">
                <img itemprop="image" style="margin-right: 50px;" class="img-thumbnail" src="/img/moose.png" alt="Picture of Chris" title="">
            </a>
            <div class="pull-left">
                <h1 itemprop="name">Christopher A. Rubio</h1>
                <h2 itemprop="jobTitle">Web Developer</h2>
                <ul class="contact-info">
                    <li itemscope itemtype="http://schema.org/PostalAddress"><span itemprop="address" class="glyphicon glyphicon-home"></span>San Jose, CA</li>
                    <li><span itemprop="telephone" class="glyphicon glyphicon-earphone"></span>510-552-4700</li>
                    <li><span itemprop="email" class="glyphicon glyphicon-envelope"></span>c.arthur.rubio@gmail.com</li>
                    <li><a itemprop="url" href="http://www.linkedin.com/in/christopherrubio" style="text-decoration:none;"><span style="font: 100% Arial,sans-serif; color:#0783B6;"><img style="height: 15px; width: 20px;" src="http://s.c.lnkd.licdn.com/scds/common/u/img/webpromo/btn_in_20x15.png" alt="View my LinkedIn profile" style="vertical-align:middle" border="0">View my LinkedIn profile</span></a></li>
                    <li><a href="https://plus.google.com/u/0/111105505527935510903?rel=author">Google+</a></li>
                </ul>
            </div>
        </header>
        <!-- Employment -->
        <section class="row group card">
            <div id="companies"></div>
            <h2 class="section-header">Employment</h2>
            <div itemscope itemtype="http://schema.org/Organization">
                <h3>Web Developer</h3>
                <h4><a href="http://www.ancientfaces.com" 
                    id="af" class="co-data" data-company-id="1620710"
                    data-toggle="popover"
                    >AncientFaces.com</a></h4>
                <span class="time-span">June 2011 - December 2013</span>
                <ul>
                    <li>Backend application development in PHP on Kohana 3.1 framework</li>
                    <li>Front-end application development using JavaScript, jQuery and AJAX. Utilizes our service layer API architecture.</li>
                    <li>Assist lead dev/architect with ongoing service layer build out, site design and app development.</li>
                    <li>Studied end-to-end web development with a senior software engineer and worked on various projects in the LAMP architecture using JavaScript, HMTL, CSS and PostgreSQL, jQuery and AJAX.</li>
                </ul>
            </div>
            <div itemscope itemtype="http://schema.org/Organization">
                <h3>System Administrator</h3>
                <h4><a href="#"
                    id="imedia" data-company-id="8903" class="co-data" data-toggle="popover">Intermedia.net</a></h4>
                <span class="time-span">May 2007 - June 2011</span>
                <ul>
                    <li>Management of Microsoft Exchange (2003 – 2010) and web hosting (IIS6, II7) infrastructure.</li>
                    <li>Assisted Microsoft engineers with bug testing for future software patches.</li>
                    <li>Handled disaster recoveries, 24/7 server monitoring and daily administrative tasks.</li>
                    <li>Timely resolution of escalation issues from the support team.</li>
                </ul>
            </div>
            <div itemscope itemtype="http://schema.org/Organization">
                <h3>Support tier 2 Team Lead</h3>
                <h4><a href="#" data-company-id="8903" class="co-data">Intermedia.net</a></h4>
                <span class="time-span">May 2006 - May 2007</span>
                <ul>
                    <li>Managed the senior help desk team, handled scheduling and employee reviews.</li>
                    <li>Resolution of customer support issues and review before escalation to Sysadmin/Engineering teams.</li>
                    <li>Worked on the first Exchange 2003 to 2007 mailbox migrations before training and handing off to the 
                        rest of the support team.</li>
                </ul>
            </div>
        </section>
        <!-- Education -->
        <section class="row group card">
            <h2 class="section-header">Education</h2>
            <div itemscope itemtype="http://schema.org/EducationalOrganization">
                <h3 itemprop="name">California State University, East Bay</h3>
                <span class="time-span">
                    <time datetime="2001-09-01">Fall 2001 </time>
                    <time datetime="2003-09-01"> - Fall 2003</time>
                </span>
                <ul>
                    <li>B.S. in Business Administration, option in Telecommunications Management</li>
                    <li>Undergraduate Coursework: Client/Server architecture I&II, Network architecture, Intro to C++</li>
                </ul>
            </div>
            <div itemscope itemtype="http://schema.org/EducationalOrganization">
                <h3 itemprop="name">Ohlone College</h3>
                <span class="time-span">1998 - 2000</span>
                <ul>
                    <li>Computer Science, General</li>
                </ul>
            </div>
            <h3 class="title">Certifications</h3>
            <ul>
                <li>Microsoft: MCSA – Messaging (2008), MCSE (2009), MCTS (2010)</li>
            </ul>
        </section>
        <!-- Projects -->
        <section class="row group card">
            <h2 class="section-header">Projects</h2>
            <ul class="projects">
                <li><span class="title">Bootstrap integration</span>
                    Converted all site templates and static pages to utilize Twitter Bootstrap 2.3.
                <li>
                    <span class="title">Service layer API</span> Assisted with the API build out and rewrote all site controllers and models to achieve thin
                    controllers and moved most business logic into the API. Wrote front-end applications that utilized the service.
                    Currently writing new API controllers as the full product build continues.
                </li>
                <li><span class="title"><a href="/project/">Uploader</a></span> Reduced the site upload process down to one step from five. Utilized PHP, javascript, 3rd party jQuery plugins</li>
                <li><span class="title">Photo tagger</span> Wrote a jQuery plugin that handles tagging users in photos. PHP, jQuery.</li>
                <li>
                    <span class="title">Discussion system</span> Assisted lead developer creating the site discussion board system. This app allows users 
                    to leave comments in a threaded fashion on various site resources (photos, people, surnames, etc). I wrote 
                    the back-end API controllers, jQuery methods and designed the UI for control options (editing/deleting/
                    undeleting). PHP, jQuery, javascript, AJAX.
                </li>
                <li>
                    <span class="title">User messaging system</span> Designed and built a conversation style message system for user to user 
                    communication within the site. API driven. PHP, jQuery, javascript, AJAX.
                </li>
            </ul>
        </section>
        <!-- Languages -->
        <section itemscope itemtype="http://schema.org/ItemList" class="row group card last">
            <h2 class="section-header">Languages/technologies</h2>
            <ul>
                <li itemprop="itemListElement">PHP, JavaScript, HTML, CSS, jQuery, SQL</li>
                <li itemprop="itemListElement">MySQL, PostgreSQL, Git, Firebug & Chrome developer tools</li>
            </ul>
        </section>
    </section>
</div>
<!-- LI stuff -->
<!-- 1. Include the LinkedIn JavaScript API and define a onLoad callback function -->
<script type="text/javascript" src="http://platform.linkedin.com/in.js">/*
  api_key: 75f1zcwyz07q0o
  onLoad: onLinkedInLoad
  authorize: true
*/</script>
  
</script>
</head>
<body>

<!-- 3. Displays a button to let the viewer authenticate -->
<script type="IN/Login"></script>

<!-- 4. Placeholder for the greeting -->
<div id="profiles"></div>
@stop