<?php 
	$navIndex = '<li><a href="index.php">HOME</a></li>';
	$navHistory = '<li><a href="history.php">HISTORY</a></li>';
	$navOdins = '<li id="current"><a href="odins.php">ÓÐINS</a></li>';
	$navRegion = '<li><a href="region.php">REGION</a></li>';
	
	$titleCurrent = 'Niflheim - Odins';
	
	require('./templates/header.php');
?>

        <section>
            <section class="leftContent">
                <div class="leftTop"></div>
                <div id="leftMid">
                    <h1>DATE</h1>
                    <p>In 2002, Jónas Kristjánsson in the Icelandic daily Morgunblaðið argued in favor of an earlier dating than Bugge, perhaps to the 14th century (or 1300s), based on linguistic evidence and the seemingly corrupt state of the text. Linguist Kristján Árnason disagreed and argued on the basis of a metrical analysis that the poem as it has come down to us can hardly be older than from the 16th century.</p>
                    <br />
                    <p>Annette Lassen, in her preliminary assessment (2006) had stated conservatively that this poem should not be subject to greater skepticism than e.g. Fjölsvinnsmál and Sólarljóð (other Eddic poems thought to be of later authorship and exist only in paper manuscripts). But in her 2011 critical edition with accompanying translation (rendered into English by Anthony Faulkes), she states unequivocally that the poem "is a postmedieval poem" probably composed soon after "the rediscovery of the Codex Regius of the Elder Edda in 1643". Elsewhere she assigns a terminus post quem to when the Icelanders were familiarized with Erasmus's Adagia (1500), which she says must have been the conduit through which the poet learned the adage in nocte consilium which is adapted into the poem in st. 22. Another dating clue is the occurrence of the word máltíd st. 20, a Middle Low German loanword, used in Iceland after the middle of the 14th century, though the poem can "hardly be as old as that."</p>
                </div>
                <div class="leftBot"></div>
            </section>
            <section class="midContent">
                <div class="midTop"></div>
                <div id="midMid">
                    <h1>HRAFNAGALDR ÓÐINS</h1>
                    <p>Hrafnagaldr Óðins ("Odin's raven-galdr") or Forspjallsljóð ("prelude poem") is an Icelandic poem in the style of the Poetic Edda. It is preserved only in late paper manuscripts. In his influential 1867 edition of the Poetic Edda, Sophus Bugge reasoned that the poem was a 17th-century work, composed as an introduction to Baldrs draumar. Since then it has not been included in editions of the Poetic Edda and not been extensively studied. But prior to Bugge's work the poem was considered a part of the Poetic Edda and included, for example, in the English translations of A. S. Cottle (1797) and Benjamin Thorpe (1866) as well as Karl Simrock's influential German translation (1851). In 1852, William and Mary Howitt characterized it as "amongst the most deeply poetical and singular hymns of the Edda".</p>
                    <br />
                    <h1>CONTENTS</h1>
                    <p>The poem consists of 26 fornyrðislag eight-line stanzas. It involves several known figures from Norse mythology, including Odinn, Idunn, Heimdall, Loki and Bragi, but does not appear to describe a myth known from other sources.</p>
                    <br />
                    <p>The poem begins with five stanzas of ominous introduction, the narrative proper setting in in stanza 6. Idunn falls from the world-tree (stanzas 6-7) and is given a wolfskin to wear (stanza 8). Alarmed, Odin sends a trio of messengers led by Heimdall to get news from a woman designated as "the doorpost of Gjöll's sun" (Giallar sunnu gátt, a kenning for woman[citation needed]) (stanza 9). The identity of the woman that Heimdall and his companions visit in the lower world is not revealed. She has been variously identified as Idunn (Bugge 1867), Hela (Emil Doepler, 1881), and as Urd (Simrock 1851, Viktor Rydberg, 1889). The messengers ask her the beginning, duration and end of heaven, the world, and hel (stanza 11). Tears are her only response (stanzas 12-13). The failed messengers return to Asgard, joining a feast in progress (stanzas 14-15). Heimdall tells the gods of their mission; Loki informs the goddesses (stanzas 16-19). The festivities conclude (stanza 21), and the onset of night[dubious – discuss] is described in mythological terms (stanzas 22-26). In the final verse, Heimdall lifts his horn toward heaven.</p>
                </div>
                <div class="midBot"></div>
            </section>
            <section class="rightContent">
                <div class="rightTop"></div>
                <div id="rightMid">
				<?php require('./templates/form.php'); ?>
                </div>
                <div class="rightBot"></div>
            </section>
        </section>
        <div class="clearfix"></div>
<?php 
	require('./templates/footer.php');
?>