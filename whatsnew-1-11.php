<?php
$title = "What's New in Mixxx 1.11";
$meta = "Download the most advanced FREE DJ software available, featuring iTunes integration, MIDI controller support, internet broadcasting, and integrated music library.";
require('header.php');
?>
<?php
require('navbar.php');
?>

<div id="wrapper">

<div class="content">
<div style="float: right; width: 370px; border: 1px solid #222; border-radius: 5px; margin-top: 0px; padding: 16px; margin-left: 70px; margin-right: 20px;">
<H2 style="margin-top: 0px;">New to Mixxx?</H2>
Mixxx is <b>free</b>, open source DJ software that gives you everything you need to DJ and mix
music live at your next party or club gig. <a href="/download">Download it today</a> and mix like a pro on Windows, Mac OS X, and Linux. 
</div>
<H1>What's New in Mixxx 1.11?</H1>
<p>Take your DJing to the next level. Mixxx 1.11 adds dozens of powerful new features for the pro DJ. And as always, Mixxx 1.11 is available as a <b>free upgrade</b> for all existing Mixxx users.</p>
<div style="clear: both;"></div>

<div style="text-align: center; margin-top: 50px; margin-bottom: 50px;">
    <img src="/images/mixxx_tilt.png" height=300>
</div>

<div class="halfbox_left">
    <H2>Vibrant Waveforms</H2>
    <p>
        Visualize the dynamics of every beat with the brand new triple-band color waveforms in Mixxx 1.11. Watch each band morph as you tweak each EQ.
    </p>
    <p>These new, butter-smooth waveforms run at up to 60 FPS, taking advantage of hardware OpenGL
       acceleration for maximum performance.
    </p>
</div>
<div class="halfbox_right">
    <img src="/images/feature_vibrantwaveform.png" style="margin-left: 30px;">
</div>
<div style="clear: both;"></div>
<div class="halfbox_left">
    <img src="/images/feature_beatdetection.png">
</div>
<div class="halfbox_right">
    <H2>Next Generation Beat Detection</H2>
    <p>
        Sync, drop loops, and lay hotcues with deadly accuracy. A cutting-edge beat detection engine from Queen Mary University delivers <b>unrivaled precision</b> in detecting song tempos and individual beats.</p>
    <p>You've never seen BPM detection quite like this before.
    </p>
</div>
<div style="clear: both;"></div>
<div class="halfbox_left">
    <H2>Session History</H2>
    <p>
    Whether you need to report your setlists to ASCAP or just remember the tracks you played last night, the new Session History feature keeps track of every tune you drop so that you don't have to.
    </p>
</div>
<div class="halfbox_right">
    <img src="/images/feature_sessionhistory.png">
</div>
<div style="clear: both;"></div>
<div class="halfbox_left">
    <img src="/images/feature_previewdeck.png" style="margin-left: 60px;">
</div>
<div class="halfbox_right">
    <H2>Preview Deck</H2>
    <p>Never skip a beat - A dedicated deck for track previewing is now directly integrated into the library and routed to your headphones.
    </p>
</div>
<div style="clear: both;"></div>
<div class="halfbox_left">
    <H2>Beatloop Rolls</H2>
    <p>Mash and stutter your mix with Beatloop Rolls. This stunning new effect works just like a beatloop except when you release the button the deck jumps to where it would have been as if you hadn't started the loop. Try it out by right-clicking on a beat-loop button.</p>
</div>
<div class="halfbox_right" style="margin-top: 30px;">
<img src="/images/feature_beatlooprolls.png">
</div>
<div style="clear: both;"></div>


<div class="gapfiller" style="height: 57px; margin-top: 60px;">
    <div class="download_button">
        <img src="/images/download.png" alt="Download Now for FREE!" onclick="location.href='/downloadlatest.php?os=' + OSName;" border="0px" style="vertical-align: middle; cursor:pointer; margin-top: -30px; margin-bottom: -30px;" />
     </div>
    <p style="text-align: center;">Like what you see? Download Mixxx for FREE and Start DJing:</p>
</div>

<div style="clear: both;"></div>
<div class="halfbox_left">
    <H2>Upgraded Sample Decks</H2>
    <p>All sample decks now have sync buttons for automatic tempo and phase synchronization with the main decks.</p>
    <img src="/images/feature_samplerdeck.png">
</div>
<div class="halfbox_right">
    <H2>Core Mixing Engine Improvements</H2>
    <ul>
        <li>Improved waveform scratching</li>
        <li>Hamster (reverse) crossfader option</li>
        <li>End of track warning</li>
        <li>Mixing interface remembers more settings</li>
        <li>Microphone talkover button sticks if you tap it (like power windows)</li>
        <li>MixVibes Timecode Vinyl support</li>
    </ul>
</div>
<div style="clear: both;"></div>
<div class="halfbox_left">
    <H2>New Sample Grid Skin</H2>
</div>
<div style="text-align: center; margin-bottom: 100px;">
    <img src="/images/feature_samplegrid.png">
    <p>With 16 sample decks, this skin is perfect for radio DJs and
       advanced beat-jugglers alike.</p>
</div>
<div style="clear: both;"></div>


<H1>Upgraded Library</H1>
The Mixxx music library was designed from the ground up for DJs. Powered by a high-performance database, accessing and organizing your music is easy and intuitive.
<div style="clear: both;"></div>
<div class="halfbox_left">
    <H2><img src="/images/ic_library_itunes.png" class="feature_icon">Advanced Search</H2>
    <p class="feature_indent">
    </p>
    The library search box is now capable of advanced queries to help you pinpoint that perfect track.
    </p>
    <p><b>Try out some of these example searches:</b></p>
    All tracks between 100 and 120BPM with rating greater than 4:
    <p class="feature_indent">
        bpm:100-120 rating:&gt;4
    </p>
    All tracks with "Aphex Twin" in the artist column:
    <p class="feature_indent">
        artist:"Aphex Twin"
    </p>
    All Electro tracks with BPM greater than 115:
    <p class="feature_indent">
        genre:electro bpm:&gt;115
    </p>
    <!-- For full details, see XXXXXX. -->
</div>
<div class="halfbox_right">
<img src="/images/feature_library.png" style="padding-top: 30px;">
<b>Exportable Set Lists</b>
<p>Set playlists can now be exported as text files, CUE files, and M3U playlists.</p>
<b>Editable Quick Links</b>
<p>Quick Links in the library Browse view can now be edited.</p>
<b>Improved Auto DJ</b>
<p>The crossfade length can now be changed, tracks can be re-queued instead of removing them, and more.</p>
</div>
<div style="clear: both;"></div>



<H1>Improved, Expanded Support for DJ Controllers</H1>
<p>Mixxx 1.11 brings support for an exciting new range of DJ controllers and a new point and click MIDI mapping interface that makes it easier to
   create and customize the way your controller works with Mixxx.</p>
<div class="halfbox_left">
    <H2>USB HID and USB Bulk Mode DJ Controller Support</H2>
    <p>
    Mixxx now supports non-MIDI devices using its powerful scripting system.
    Mixxx 1.11.0 comes with HID presets for the following devices:
    <ul>
        <li>Traktor Kontrol F1</li>
        <li>Pioneer CDJ 850/900/2000</li>
        <li>Hercules DJ Console Mk1</li>
        <li>Hercules DJ Console Mk2</li>
        <li>Hercules DJ Control MP3 e2 (driver no longer necessary on Linux)</li>
        <li>EKS Otus</li>
        <li>Nintendo Wiimote</li>
        <li>Sony SixxAxis</li>
    </ul>
    </p>
</div>
<div class="halfbox_right">
    <H2>Point and Click MIDI Mapping</H2>
    <p>Getting your controller mapped is now easier than ever. Just click on the button or knob you want to map in Mixxx and then wiggle the control on your MIDI controller to wire it up.</p>
</div>
<div style="clear: both;"></div>


<H2>Newly Supported DJ MIDI Controllers</H2>
<div style="float: right">
    <img src="/images/feature_newcontrollers.png" alt="Newly Supported Controllers in Mixxx 1.11">
</div>

<p>
    <b>New Mixxx Certified Controllers</b>
</p>
<ul>
<li>Allen &amp; Heath Xone K2</li>
<li>EKS Otus</li>
<li>Keith McMillen Instruments QuNeo</li>
<li>Vestax VCI-400</li>
</ul>

<p>
    <b>New Mixxx Community Supported Controllers</b>
</p>
<div style="float: left; width: 30%; padding-right: 50px;">
    <ul>
        <li>Akai LPD8</li>
        <li>American Audio VMS2</li>
        <li>Behringer BCD2000</li>
        <li>DJ-Tech CDJ-101</li>
        <li>DJ-Tech DJM-101</li>
        <li>Gemini FirstMix</li>
        <li>Hercules DJ Console Mk1</li>
        <li>Hercules DJ Console 4-Mx</li>
        <li>Hercules DJ Control AIR</li>
        <li>Hercules DJ Control Instinct</li>
    </ul>
</div>
<div style="float: left; width: 30%; padding-right: 50px;">
    <ul>
        <li>Kontrol Dj KDJ500</li>
        <li>Korg nanoKONTROL</li>
        <li>Korg nanoPAD2</li>
        <li>MixVibes U-Mix Control 2</li>
        <li>Nintendo Wiimote</li>
        <li>Novation Dicer</li>
        <li>Novation Launchpad</li>
        <li>Numark DJ2Go</li>
        <li>Numark MixTrack Pro</li>
    </ul>
</div>
<div style="float: left; width: 25%; padding-right: 0px;">
    <ul>
        <li>Numark N4</li>
        <li>Numark Omni Control</li>
        <li>Numark V7</li>
        <li>Reloop Terminal Mix 4</li>
        <li>Sony Sixxaxis</li>
        <li>Traktor Kontrol F1</li>
        <li>Vestax VCI-100 3DEX Edition</li>
        <li>Vestax VCI-300</li>
    </ul>
</div>

<div style="clear: both;"></div>
<div style="margin-top: 40px; margin-bottom: 40px;">
    <b>Want to know if your DJ MIDI controller is supported in Mixxx?</b> Please check the <a href="/features/#full_specs">full technical specifications</a>.
</div>



<center><img src="/images/feature_sampler2.png"></center>

<div style="clear: both;"></div>
<div class="gapfiller" style="height: 57px; margin-top: 60px; margin-bottom: 60px;">
    <div class="download_button">
        <img src="/images/download.png" alt="Download Now for FREE!" onclick="location.href='/downloadlatest.php?os=' + OSName;" border="0px" style="vertical-align: middle; cursor:pointer; margin-top: -30px; margin-bottom: -30px;" />
     </div>
    <p style="text-align: center;">Ready to Upgrade? Download Mixxx for FREE and Start DJing:</p>
</div>


<?php require('footer.php'); ?>
