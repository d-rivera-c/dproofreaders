<?
$relPath='../pinc/';
include($relPath.'v_site.inc');
include($relPath.'connect.inc');
include($relPath.'theme.inc');
new dbConnect();
$no_stats=1;
theme('Proofreading Guidelines','header');
?>

  <style TYPE="text/css">
<!--
  tt {color: red}
        -->
  </style>
<!--

  <style>
                @page { size: 21.59cm 27.94cm; margin-left: 3.18cm; margin-right: 3.18cm; margin-top: 2.54cm; margin-bottom: 2.54cm }
                P { margin-bottom: 0.21cm }
                TD P { margin-bottom: 0.21cm }
  </style>
        -->
    
<h1 align="center">Proofreading Guidelines</h1>
<h3 align="center">Version 1.65, released May 4, 2004 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="dochist.php"><font size="-1">(Revision History)</font></a></h3>
    
<h4>Proofreading Guidelines in <a href="guidelines_francaises.html">French</font></a> /
 
    Directives de Formatage en <a href="guidelines_francaises.html">fran&ccedil;aise</font></a></h4>

<!-- Old version:
<h4>Proofreading Guidelines in <a href="http://panic.et.tudelft.nl/~saibot/DPGF2.html">French</a> / 
     Directives de Formatage en <a href="http://panic.et.tudelft.nl/~saibot/DPGF2.html">Fran&ccedil;aise</a></h4>
 ** Temporary redirect:  -->
<table border="0" cellspacing="0" width="100%" summary="Proofreading Guidelines">
  <tbody>
    <tr>
      <td width="1" bgcolor="silver">&nbsp;</td>
      <td bgcolor="silver" align="left"><font size="+2"><b>Table of Contents</b></font></td>
    </tr>
    <tr>
      <td width="1" bgcolor="silver">&nbsp;</td>
      <td bgcolor="white" align="left">
      <ul>
        <li><a href="#prime">The Primary Rule </a>                      </li>
        <li><a href="#summary">Summary Guidelines</a>                   </li>
        <li><a href="#about">About This Document</a>                    </li>
        <li><a href="#comments">Project Comments</a>                    </li>
        <li><a href="#forums">Forum/Discuss this Project</a>            </li>
        <li><a href="#prev_pg">Fixing errors on Previous Pages</a>      </li>
      </ul>
      </td>
    </tr>
    <tr>
      <td width="1" bgcolor="silver">&nbsp;</td>
      <td bgcolor="silver" align="left">
        <ul>
          <li>Formatting of the...                                      </li>
        </ul>
      </td>
    </tr>
    <tr>
      <td width="1" bgcolor="silver">&nbsp;</td>
      <td bgcolor="white" align="left">
      <ul>
        <li>
          <ul>
            <li><a href="#title_pg">Front/Back Title Page</a>           </li>
            <li><a href="#toc">Table of Contents</a>                    </li>
            <li><a href="#blank_pg">Blank Page</a>                      </li>
            <li><a href="#page_hf">Page Headers/Page Footers</a>             </li>
            <li><a href="#chap_head">Chapter Headers</a>                </li>
            <li><a href="#para_side">Paragraph Side-Descriptions (Sidenotes)</a></li>
            <li><a href="#para_space">Paragraph Spacing/Indenting</a>             </li>
            <li><a href="#mult_col">Multiple Columns</a>                </li>
            <li><a href="#illust">Illustrations</a>                     </li>
            <li><a href="#footnotes">Footnotes/Endnotes</a>             </li>
            <li><a href="#italics">Italics</a>                          </li>
            <li><a href="#bold">Bold Text</a>                           </li>
            <li><a href="#supers">Superscripts</a>                      </li>
            <li><a href="#underl">Underlined Text</a>                   </li>
            <li><a href="#spaced">S p a c e d &nbsp; O u t Text (gesperrt)</a></li>
            <li><a href="#font_sz">Font size changes</a>                </li>
            <li><a href="#word_caps">Word in all Caps or Small Caps</a> </li>
            <li><a href="#drop_caps">Large, Ornate opening Capital letter (Drop Cap)</a> </li>
            <li><a href="#eol_hyphen">End-of-line Hyphenation</a>       </li>
            <li><a href="#eop_hyphen">End-of-page Hyphenation</a>       </li>
            <li><a href="#em_dashes">Dashes, Hyphens, and Minus Signs</a></li>
            <li><a href="#next_word">Single word at bottom of page</a>  </li>
            <li><a href="#abbrev">Abbreviations</a>                     </li>
            <li><a href="#contract">Contractions</a>                    </li>
            <li><a href="#poetry">Poetry/Epigrams </a>                  </li>
            <li><a href="#letter">Letter Indentation</a>                  </li>
            <li><a href="#lists">Lists of Items</a>                     </li>
            <li><a href="#tables">Tables</a>                            </li>
            <li><a href="#block_qt">Block Quotations</a>                </li>
            <li><a href="#double_q">Double Quotes</a>                   </li>
            <li><a href="#single_q">Single Quotes</a>                   </li>
            <li><a href="#quote_ea">Quote Marks on each line</a>        </li>
            <li><a href="#period_s">Periods Between Sentences</a>       </li>
            <li><a href="#punctuat">Punctuation</a>                     </li>
            <li><a href="#line_br">Line Breaks</a>                      </li>
            <li><a href="#extra_sp">Extra spaces or tabs between Words</a></li>
            <li><a href="#line_no">Line Numbers</a>                     </li>
            <li><a href="#extra_s">Extra Spacing/Stars/Line Between Paragraphs</a></li>
            <li><a href="#period_p">Period Pause &quot;...&quot; (Ellipsis)</a>              </li>
            <li><a href="#a_chars">Accented/Non-ASCII Characters</a>    </li>
            <li><a href="#d_chars">Characters with Diacritical marks</a></li>
            <li><a href="#f_chars">Non-English Characters</a>           </li>
            <li><a href="#fract_s">Fractions</a>                        </li>
            <li><a href="#page_ref">Page References "(See Pg. 123)"</a> </li>
            <li><a href="#bk_index">Indexes</a>                         </li>
            <li><a href="#trail_s">Trailing Space at End-of-line</a>    </li>
            <li><a href="#play_n">Play Actor Names/Stage Notes</a>      </li>
            <li><a href="#anything">Anything else that needs special handling or that you're unsure of</a> </li>
          </ul>
        </li>
      </ul>
      </td>
    </tr>
    <tr>
      <td width="1" bgcolor="silver">&nbsp;</td>
      <td bgcolor="silver" align="left">
      <ul>
        <li>Specific Guidelines for Special Books</li>
      </ul>
      </td>
    </tr>
    <tr>
      <td width="1" bgcolor="silver">&nbsp;</td>
      <td bgcolor="white" align="left">
      <ul>
        <li>
          <ul>
            <li><a href="#sp_ency">Encyclopedias</a>                       </li>
            <li><a href="#sp_poet">Poetry Books</a>                        </li>
            <li><a href="#sp_chem">Chemistry Books</a>   [to be completed.]</li>
            <li><a href="#sp_math">Mathematics Books</a> [to be completed.]</li>
          </ul>
        </li>
      </ul>
      </td>
    </tr>
    <tr>
      <td width="1" bgcolor="silver">&nbsp;</td>
      <td bgcolor="silver" align="left">
      <ul>
        <li>Common Problems </li>
      </ul>
      </td>
    </tr>
    <tr>
      <td width="1" bgcolor="silver">&nbsp;</td>
      <td bgcolor="white" align="left">
      <ul>
        <li>
          <ul>
            <li><a href="#OCR_1lI">1-l-I OCR Problems</a>               </li>
            <li><a href="#OCR_other">Other OCR Problems</a>             </li>
            <li><a href="#hand_notes">Handwritten Notes in Book</a>     </li>
            <li><a href="#bad_image">Bad Image</a>                      </li>
            <li><a href="#bad_text">Wrong Image for Text</a>            </li>
            <li><a href="#round1">Previous Proofreader Mistakes</a>     </li>
            <li><a href="#p_errors">Printer Errors/Misspellings</a>     </li>
            <li><a href="#f_errors">Factual Errors in Texts</a>         </li>
            <li><a href="#uncertain">Uncertain Items</a>                </li>
          </ul>
        </li>
      </ul>
      </td>
    </tr>
    <tr>
      <td width="1" bgcolor="silver">&nbsp;</td>
      <td bgcolor="silver">&nbsp;</td>
    </tr>
   </tbody>
</table>
    
<h3><a name="prime">The Primary Rule</a> </h3>
<p> In doing your proofreading, the primary rule to follow is that the final electronic
    book seen by a reader, possibly many years in the future, should <b>accurately
    convey the intent of the author</b>. </p>
<p> So the general rule is <em>"Don't change what the author wrote!"</em>  If the
    author spelled words oddly, leave them spelled that way. If the author wrote
    outrageous racist or biased statements, leave them that way. If the author seems to
    put italics or a footnote every third word, leave them italicized or footnoted. </p>
<p> On the other hand, we do change minor printing items that don't affect the sense of
    what the author wrote.<br>
  <br>
    For example, typesetters in the 1700's &amp; 1800's often inserted a &frac34;ths
    space before punctuation such as a semicolon or comma. Our OCR scanners generally
    read this as a space character. But when proofreading, we remove that space, since
    it distracts modern readers and removing it doesn't affect the meaning of the
    author's words. Typesetters of that time also used the "long s" (&fnof; or &#383;)
    <!-- Need a better html or unicode tag for this! ??? -->
    in words,
    which looks similar to a modern "f".  In English, the "long s" and the regular "s"
    are the same, so we make them all the regular "s". </p>

<table width="100%" border="0" cellspacing="0" summary="Summary Guidelines">
  <tbody>
    <tr>
      <td bgcolor="silver">&nbsp;</td>
    </tr>
  </tbody>
</table>
<h3><a name="summary">Summary Guidelines</a>                   </h3>
<p> The <a href="summary.pdf">Summary of Guidelines</a> is a short, 2-page
    printer-friendly (.pdf) document that summarizes the main points of these
    Guidelines, and gives examples of how to proofread.  Beginning Proofreaders are
    encouraged to print out this document and keep it handy while proofreading.
 
<h3><a name="about">About This Document</a> </h3>
<p> This document is written in order to reduce formatting differences when proofreading
    of one book is distributed among many proofreaders, each working on different pages
    of the book.  This helps us all do formatting <em>the same way</em>.  That makes it
    easier for the post-processor to eventually combine all these proofed pages into
    one e-book.</p>
<p>
    <i>But it's not intended as any kind of a general editorial or typesetting
    rulebook</i>. </p>


<p> We've included in this document all the items that new users have asked about
    formatting while proofreading.  If there are any items missing, or items that you
    consider should be done differently, or if something is vague, please let us know.
    </p>
<p> This document is a work in progress. Help us to progress by sending in your
    suggested changes. </p>
    <!-- Send 'em where???? -->

<h3><a name="comments">Project Comments</a> </h3>
<p> On the interface page where you start proofreading pages, there is a section called
    "Project Comments" containing info specific to that project (book). <em>Read these
    before you start proofreading pages!</em> If the Project Manager wants you to format
    something in this book differently from the way specified in these Guidelines, that
    will be noted here.  Instructions in the Project Comments <em>override</em> the rules
    in these Guidelines, so follow them.  (This is also where the Project Manager gives
    you interesting tidbits of information about the books, like where the source came
    from, etc.) </p>

<h3><a name="forums">Forum/Discuss this Project</a> </h3>
<p> On the interface page where you start proofreading pages, on the line "Forum", there is
    a link titled "Discuss this Project" (if the discussion has already started), or "Start a 
    discussion on this Project" (if it hasn't).  Clicking on that link will take you to a
    thread in the projects forum dedicated to this specific project. That is the place to ask 
    questions about this book, 
    inform the Project Manager about problems, etc.  Using this project forum thread is the
    recommended way to communicate with the Project Manager and other proofreaders who are
    working on this book. </p>
    
<h3><a name="prev_pg">Fixing errors on Previous Pages</a> </h3>
<p> Each project has a project comments page, which is loaded when you click on a
    project name from the list of projects available for proofreading on your personal page
    (which is the page that appears when you log in).  </p>
<p> This page contains links to pages from this project that you have recently proofed.
    (If you haven't proofed any pages yet, there will be no links shown.) These links
    appear under one of two headings, depending on whether you have told the system you have
    completed the proofreading on a page or not.  </p>

<p> The two headings are "DONE" and "IN PROGRESS". Links to
    the five most recently proofed pages will show under each heading. Pages linked to
    from "DONE" are considered complete, and will proceed automatically
    to the next round when all other pages in the project have also been completed.
    Pages linked to from "IN PROGRESS" are waiting for you to complete them;
    they will not proceed automatically to the next round (neither will they hold the
    book up indefinitely: eventually, if not completed by you, the system will reclaim
    them, discard your changes, and make them available for someone else to proof).
    </p>
<p> When you first load a new page to proof, by clicking on the 'Start Proofreading' link on
    the project comments page, a link to the page is created under 'IN PROGRESS'.
    Each time you press the "Save as 'In Progress'" button, this link is updated to point to
    the newly saved version of the page. You tell the system you have completed the
    proofreading on a page by pressing either
    the "Save as 'Done'" or the "Save as 'Done' &amp; Proof Next" button.
    Pressing either of these buttons moves the link to the page from
    the "IN PROGRESS" section to the "DONE" section. This is
    the only way you can mark pages as complete and make sure your work will get through
    to the next round. Until you press one of those two buttons, the page is
    'incomplete', even if you press the "Stop Proofreading" button.  </p>
<p> Pages listed under either "DONE" or "IN PROGRESS"  are
    available to make proofreading corrections or to finish proofreading.  Just click
    on the link to the page.  So if you discover that you made a mistake on a page, or
    marked something incorrectly, you can click on that page here and re-open it to fix
    the error. (If it's already gone by, then use the  <a href="#forums">project
    forum</a> to leave a note for the next round.) </p>
<br>
<table width="100%" border="0" cellspacing="0" cellpadding="6" summary="Title Page">
  <tbody>
    <tr>
      <td bgcolor="silver"><font size="+2">Formatting of the...</font></td>
    </tr>
  </tbody>
</table>
   
<h3><a name="title_pg"><b>Front/Back Title Page</b></a> </h3>
<p> Include all the text, just as it was printed on the page.  [Sometimes part of this
    info will have to be removed later, due to trademark restrictions (like publisher
    name, etc.), but that will be done by the post-processor, if needed.  For proofing,
    just include it all, including the years of publication or copyright.]</p>
<p> Put everything just as the book has it written, whether all capitals, upper &amp;
    lower case, etc.  Older books often show the first letter as a large &amp; ornate
    graphic--put this as just the letter.  </p>
<table width="100%" border="1" cellpadding="4"
 cellspacing="0" summary="Title Page Example">
  <col width="256*"> <tbody>
    <tr>
      <td width="100%" valign="top">
      <p>Sample Image</p>
      </td>
    </tr>
    <tr align="center">
      <td width="100%" valign="top"><img src="title.png" width="505"
          height="780" alt="title page image"><br>
      </td>
    </tr>
    <tr>
      <td width="100%" valign="top">
      <p>Correct Text</p>
      </td>
    </tr>
    <tr>
      <td width="100%" valign="top">
      <p>GREEN FANCY <br>
      <br>
      </p>
      <p>BY <br>
         GEORGE BARR McCUTCHEON                            <br>
         AUTHOR OF "GRAUSTARK," "THE HOLLOW OF HER HAND,"  <br>
         "THE PRINCE OF GRAUSTARK," ETC.                   <br>
                                                           <br>
         WITH FRONTISPIECE BY                              <br>
         C. ALLAN GILBERT                                  <br>
                                                           <br>
         NEW YORK                                          <br>
         DODD, MEAD AND COMPANY.                           <br>
         1917                                              <br>
      </p>
      </td>
    </tr>
  </tbody>
</table>
    
<h3><a name="toc">Table of Contents</a> </h3>
<p> Remove all page numbers from the table of contents, along with any ... or *** used
    to align the page numbers. Due to converting the book to electronic form, the page
    numbers will be removed from the entire book.  Put the Table of Contents items just
    as printed in the book, whether all capitals, upper &amp; lower case, etc. Please
    read the Project Comments, as the Project Manager may request the numbers to
    be left in. </p>

<table width="100%" border="1" cellpadding="4"
 cellspacing="0" summary="TOC">
  <col width="256*"> <tbody>
    <tr>
      <td width="100%" valign="top">
      <p>Sample Image</p>
      </td>
    </tr>
    <tr align="center">
      <td width="100%" valign="top">
      <p><img src="tablec.png" alt="" width="591" height="780"></p>
      </td>
    </tr>
    <tr>
      <td width="100%" valign="top">
      <p>Correct Text</p>
      </td>
    </tr>
    <tr>
      <td width="100%" valign="top">
      <p><tt>CONTENTS </tt></p>
      <p><tt>CHAPTER <br>
      </tt> </p>
      <tt>                                                          <br>
          I.     THE FIRST WAYFARER AND THE SECOND WAYFARER         <br>
          MEET AND PART ON THE HIGHWAY                              <br>
                                                                    <br>
          II.    THE FIRST WAYFARER LAYS HIS PACK ASIDE AND         <br>
          FALLS IN WITH FRIENDS                                     <br>
                                                                    <br>
          III.   MR. RUSHCROFT DISSOLVES, MR. JONES INTERVENES,     <br>
          AND TWO MEN RIDE AWAY                                     <br>
                                                                    <br>
          IV.    AN EXTRAORDINARY CHAMBERMAID, A MIDNIGHT           <br>
          TRAGEDY, AND A MAN WHO SAID "THANK YOU"                   <br>
                                                                    <br>
          V.     THE FARM-BOY TELLS A GHASTLY STORY, AND AN         <br>
          IRISHMAN ENTERS                                           <br>
                                                                    <br>
          VI.    CHARITY BEGINS FAR FROM HOME, AND A STROLL IN      <br>
          THE WILDWOOD FOLLOWS                                      <br>
                                                                    <br>
          VII.   SPUN-GOLD HAIR, BLUE EYES, AND VARIOUS ENCOUNTERS  <br>
                                                                    <br>
          VIII.  A NOTE, SOME FANCIES, AND AN EXPEDITION IN         <br>
          QUEST OF FACTS                                            <br>
                                                                    <br>
          IX.    THE FIRST WAYFARER, THE SECOND WAYFARER, AND       <br>
          THE SPIRIT OF CHIVALRY ASCENDANT                          <br>
                                                                    <br>
          X.     THE PRISONER OF GREEN FANCY, AND THE LAMENT OF     <br>
          PETER THE CHAUFFEUR                                       <br>
                                                                    <br>
          XI.    MR. SPROUSE ABANDONS LITERATURE AT AN EARLY        <br>
          HOUR IN THE MORNING                                       <br>
                                                                    <br>
          XII.   THE FIRST WAYFARER ACCEPTS AN INVITATION, AND      <br>
          MR. DILLINGFORD BELABORS A PROXY                          <br>
                                                                    <br>
          XIII.  THE SECOND WAYFARER RECEIVES TWO VISITORS AT       <br>
          MIDNIGHT                                                  <br>
                                                                    <br>
          XIV.   A FLIGHT, A STONE-CUTTER'S SHED, AND A VOICE       <br>
          OUTSIDE                                                   <br>
      </tt>
      <p> </p>
      </td>
    </tr>
  </tbody>
</table>
    
<h3><a name="blank_pg">Blank Page</a> </h3>
<p> Blank pages may occur in the project you are working on due to the original book
    having a blank page and us trying to cut down on the work needed to find that page,
    remove it, and renumber the remaining pages.  Please just enter <tt>[Blank
    Page]</tt> in the text box if both the text box and the image are blank. (If only
    one of them is blank, follow the directions for a <a href="#bad_image">Bad Image</a>
    or <a href="#bad_text">Bad Text</a>.) </p>

<h3><a name="page_hf">Page Headers/Page Footers</a> </h3>
<p> Remove page headers and page footers (but not <a href="#footnotes">footnotes</a>)
    from the text. The page headers are normally at the top of the image and have a page
    number opposite them.  Page headers may be the same all through the book (often the
    title of the book and the author's name), they may be the same for each chapter
    (often the chapter number), or they may be different on each page (describing the
    action on that page).  Remove them all, regardless, including the page number.</p>
   <p>
    A <a href="#chap_head">chapter header</a> will start farther down the page and won't
    have the page numbers on the same line. Leave chapter headers in&mdash;see below. </p>
<p align="left" style="margin-bottom: 0cm;"><br>
</p>
<table width="100%" border="1" cellpadding="4"
 cellspacing="0" summary="Page Headers and Footers">
  <col width="256*"> <tbody>
    <tr>
      <td width="100%" valign="top">
      <p>Sample Image</p>
      </td>
    </tr>
    <tr align="center">
      <td width="100%" valign="top"> <img src="foot.png" alt=""
          width="546" height="936"><br>
      </td>
    </tr>
    <tr>
      <td width="100%" valign="top">
      <p>Correct Text</p>
      </td>
    </tr>
    <tr>
      <td width="100%" valign="top">
          <tt>In the United States?[A] In a railroad? In a mining company?           <br>
          In a bank? In a church? In a college?                                      <br>
                                                                                     <br>
          Write a list of all the corporations that you know or have                 <br>
          ever heard of, grouping them under the heads &lt;i&gt;public&lt;/i&gt; and &lt;i&gt;private&lt;/i&gt;.                                                <br>
                                                                                     <br>
          How could a pastor collect his salary if the church should                 <br>
          refuse to pay it?                                                          <br>
                                                                                     <br>
          Could a bank buy a piece of ground "on speculation?" To                    <br>
          build its banking-house on? Could a county lend money if it                <br>
          had a surplus? State the general powers of a corporation.                  <br>
          Some of the special powers of a bank. Of a city.                           <br>
                                                                                     <br>
          A portion of a man's farm is taken for a highway, and he is                <br>
          paid damages; to whom does said land belong? The road intersects           <br>
          the farm, and crossing the road is a brook containing                      <br>
          trout, which have been put there and cared for by the farmer;              <br>
          may a boy sit on the public bridge and catch trout from that               <br>
          brook? If the road should be abandoned or lifted, to whom                  <br>
          would the use of the land go?                                              <br>
                                                                                     <br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*                                <br>
                                                                                     <br>
                                                                                     <br>
                                                                                     <br>
                                                                                     <br>
          CHAPTER XXXV.                                                              <br>
                                                                                     <br>
          COMMERCIAL PAPER.                                                          <br>
                                                                                     <br>
                                                                                     <br>
          &lt;b&gt;Kinds and Uses.&lt;/b&gt;--If a man wishes to buy some commodity  <br>
          from another but has not the money to pay for                              <br>
          it, he may secure what he wants by giving his written                      <br>
          promise to pay at some future time. This written                           <br>
          promise, or &lt;i&gt;note&lt;/i&gt;, the seller prefers to an oral promise <br>
          for several reasons, only two of which need be mentioned                   <br>
          here: first, because it is &lt;i&gt;prima facie&lt;/i&gt; evidence of      <br>
          the debt; and, second, because it may be more easily                       <br>
          transferred or handed over to some one else.                               <br>
                                                                                     <br>
          If J.M. Johnson, of Saint Paul, owes C.M. Jones,                           <br>
          of Chicago, a hundred dollars, and Nelson Blake, of                        <br>
          Chicago, owes J.M. Johnson a hundred dollars, it is                        <br>
          plain that the risk, expense, time and trouble of sending                  <br>
          the money to and from Chicago may be avoided,                              <br>
   <br>       
          [Footnote A: The United States: "Its charter, the constitution. * * * Its flag the <br>
          symbol of its power; its seal, of its authority."--Dole.]   
       </tt>
      </td>
    </tr>
  </tbody>
</table>
    
<h3><a name="chap_head">Chapter Headers</a> </h3>
<p> Leave chapter headers in the text. A chapter header may start a bit farther down
    the page than the <a href="#page_hf">page header</a> and won't have the page numbers
    on the same line.  Chapter Headers are often printed all caps; if so, keep them as
    all caps.</p>
 <p> 
    Put 4 blank lines before the "CHAPTER XXX". (Include these blank
    lines even if the chapter starts on a new page; there are no 'pages' in an e-book,
    so the blank lines are needed.) Then leave 1 blank line between each additional part
    of the chapter header, such as a chapter description, opening quote, etc., and
    finally leave 2 blank lines before the start of the text of the chapter.</p>
  <p>
    Old books often printed the first word or two of every chapter in all caps,
    sometimes even the first word or two of every paragraph; change these to upper
    and lower case (first letter only capitalized).</p>
  <p>
    Watch out for a missing double quote at the start of the first paragraph, which some
    publishers did not include or which the OCR missed due to a large capital in the
    original.  If the author started the paragraph with dialog, insert the double quote,
    even if the publisher left it out or used a large capital instead.
</p>

<p align="left" style="margin-bottom: 0cm;"><br>
</p>
<table width="100%" border="1" cellpadding="4"
 cellspacing="0" summary="Chapters">
 <col width="256*"> <tbody>
    <tr>
      <td width="100%" valign="top">
      <p>Sample Image</p>
      </td>
    </tr>
    <tr align="center">
      <td width="100%" valign="top"> <img src="chap1.png" alt=""
          width="584" height="816"><br>
      </td>
    </tr>
    <tr>
      <td width="100%" valign="top">
      <p>Correct Text</p>
      </td>
    </tr>
    <tr>
      <td width="100%" valign="top">
        <tt>
          GREEN FANCY <br>
                      <br>
                      <br>
                      <br>
                      <br>
          CHAPTER I   <br>
                <br>
          THE FIRST WAYFARER AND THE SECOND WAYFARER            <br>
          MEET AND PART ON THE HIGHWAY                          <br>
                <br>
                <br>
          A solitary figure trudged along the narrow            <br>
          road that wound its serpentinous way                  <br>
          through the dismal, forbidding depths of              <br>
          the forest: a man who, though weary and footsore,     <br>
          lagged not in his swift, resolute advance. Night      <br>
          was coming on, and with it the no uncertain prospects <br>
          of storm. Through the foliage that overhung           <br>
          the wretched road, his ever-lifting and apprehensive  <br>
          eye caught sight of the thunder-black, low-lying      <br>
          clouds that swept over the mountain and bore          <br>
          down upon the green, whistling tops of the trees.     <br>
                <br>
          At a cross-road below he had encountered a small     <br>
          girl driving homeward the cows. She was afraid       <br>
          of the big, strange man with the bundle on his back  <br>
          and the stout walking stick in his hand: to her a    <br>
          remarkable creature who wore "knee pants" and        <br>
          stockings like a boy on Sunday, and hob-nail shoes,  <br>
          and a funny coat with "pleats" and a belt, and a     <br>
          green hat with a feather sticking up from the band.
        </tt>
      </td>
    </tr>
  </tbody>
</table>

<h3><a name="para_side">Paragraph Side-Descriptions (Sidenotes)</a> </h3>
<p> Some books will have short descriptions of the paragraph along the side of the text.
    Move these "Sidenotes" to just above the paragraph that they belong to, surrounded
    with <tt>[Sidenote: the-description-text]</tt>.  Leave a blank line after the
    sidenote, so that it does not get merged into the paragraph when the text is rewrapped 
    during post-processing (even though a sidenote is technically a part of that paragraph).  </p>
<p> If there are multiple sidenotes for a single paragraph, put them one after another
    at the start of the paragraph.  Leave a blank line separating each of them.</p>
<p> If the paragraph began on a previous page, put the Sidenote at the top of the page
    and mark it with <tt>*</tt> so that the post-processor can see that it belongs on
    the previous page.  Like this: <tt>*[Sidenote: the-description-text]</tt>.  The
    post-processor will move them to the appropriate place. </p>
<p> Sometimes a Project Manager will request that you put Sidenotes next to the sentence
    they apply to, rather than at the top or bottom of the paragraph. In this case,
    don't separate them out with blank lines.  </p>

  <table width="100%" border="1" cellpadding="4"
       cellspacing="0" summary="Sidenotes"> <col width="128*">
  <tbody>
    <tr valign="top">
      <td width="100%"> <p>Sample Image</p>
      </td>
    </tr>
    <tr valign="top">
      <td width="100%" align="center"><img src="side.png" alt=""
          width="600" height="910"><br>
      </td>
    </tr>
    <tr valign="top">
      <td width="100%"> <p>Correct Text</p>
      </td>
    </tr>
    <tr valign="top">
      <td width="100%">
        <p><tt>
               *[Sidenote: Burning                                                  <br>
               discs                                                                <br>
               thrown into                                                          <br>
               the air.]                                                            <br>
                                                                                    <br>
               that such as looked at the fire holding a bit of larkspur            <br>
               before their face would be troubled by no malady of the              <br>
               eyes throughout the year.[1] Further, it was customary at            <br>
               W�rzburg, in the sixteenth century, for the bishop's followers       <br>
               to throw burning discs of wood into the air from a mountain          <br>
               which overhangs the town. The discs were discharged by               <br>
               means of flexible rods, and in their flight through the darkness     <br>
               presented the appearance of fiery dragons.[2]                        <br>
                                                                                    <br>
               [Sidenote: The Midsummer                                             <br>
               fires in                                                             <br>
               Swabia.]                                                             <br>
                                                                                    <br>
               [Sidenote: Omens                                                     <br>
               drawn from                                                           <br>
               the leaps                                                            <br>
               over the                                                             <br>
               fires.]                                                              <br>
                                                                                    <br>
               [Sidenote: Burning                                                   <br>
               wheels                                                               <br>
               rolled                                                               <br>
               down hill.]                                                          <br>
                                                                                    <br>
               In the valley of the Lech, which divides Upper Bavaria               <br>
               from Swabia, the midsummer customs and beliefs are, or               <br>
               used to be, very similar. Bonfires are kindled on the                <br>
               mountains on Midsummer Day; and besides the bonfire                  <br>
               a tall beam, thickly wrapt in straw and surmounted by a              <br>
               cross-piece, is burned in many places. Round this cross as           <br>
               it burns the lads dance with loud shouts; and when the               <br>
               flames have subsided, the young people leap over the fire in         <br>
               pairs, a young man and a young woman together. If they               <br>
               escape unsmirched, the man will not suffer from fever, and           <br>
               the girl will not become a mother within the year. Further,          <br>
               it is believed that the flax will grow that year as high as          <br>
               they leap over the fire; and that if a charred billet be taken       <br>
               from the fire and stuck in a flax-field it will promote the          <br>
               growth of the flax.[3] Similarly in Swabia, lads and lasses,         <br>
               hand in hand, leap over the midsummer bonfire, praying               <br>
               that the hemp may grow three ells high, and they set fire            <br>
               to wheels of straw and send them rolling down the hill.              <br>
               Among the places where burning wheels were thus bowled               <br>
               down hill at Midsummer were the Hohenstaufen mountains               <br>
               in Wurtemberg and the Frauenberg near Gerhausen.[4]                  <br>
               At Deffingen, in Swabia, as the people sprang over the mid-*         <br>
                                                                                    <br>
               [Footnote 1: &lt;i&gt;Op. cit.&lt;/i&gt; iv. i. p. 242. We have      <br>
               seen (p. 163) that in the sixteenth                                  <br>
               century these customs and beliefs were                               <br>
               common in Germany. It is also a                                      <br>
               German superstition that a house which                               <br>
               contains a brand from the midsummer                                  <br>
               bonfire will not be struck by lightning                              <br>
               (J.W. Wolf, &lt;i&gt;Beitr�ge zur deutschen                         <br>
               Mythologie&lt;/i&gt;, i. p. 217, � 185).]                            <br>
                                                                                    <br>
               [Footnote 2: J. Boemus, &lt;i&gt;Mores, leges et ritus               <br>
               omnium gentium&lt;/i&gt; (Lyons, 1541), p.                           <br>
               226.]                                                                <br>
                                                                                    <br>
               [Footnote 3: Karl Freiherr von Leoprechting,                         <br>
               &lt;i&gt;Aus dem Lechrain&lt;/i&gt; (Munich, 1855),                  <br>
               pp. 181 &lt;i&gt;sqq.&lt;/i&gt;; W. Mannhardt, &lt;i&gt;Der          <br>
               Baumkultus&lt;i&gt;, p. 510.]                                        <br>
                                                                                    <br>
               [Footnote 4: A. Birlinger, &lt;i&gt;Volksth�mliches aus              <br>
               Schwaben&lt;/i&gt; (Freiburg im Breisgau, 1861-1862),                <br>
               ii. pp. 96 &lt;i&gt;sqq.&lt;/i&gt;, � 128, pp. 103                   <br>
               &lt;i&gt;sq.&lt;/i&gt;, � 129; &lt;i&gt;id., Aus Schwaben&lt;/i&gt; (Wiesbaden,   <br>
               1874), ii. 116-120; E. Meier,                                        <br>
               &lt;i&gt;Deutsche Sagen, Sitten und Gebr�uche                        <br>
               aus Schwaben&lt;/i&gt; (Stuttgart, 1852), pp.                        <br>
               423 &lt;i&gt;sqq.&lt;/i&gt;; W. Mannhardt, &lt;i&gt;Der Baumkultus&lt;/i&gt;,     <br>
               p. 510.]                                                             <br>
        </tt></p>
      </td>
    </tr>
  </tbody>
</table>

<h3><a name="para_space">Paragraph Spacing/Indenting</a> </h3>
<p> Do not indent the start of paragraphs; instead put a blank line between paragraphs.
    See the <a href="#chap_head">Chapter Headers</a> image/text for an example. (But if
    all paragraphs are already indented, don't bother removing those spaces--that can be
    done automatically in post-processing.) </p>
 
<h3><a name="mult_col">Multiple Columns</a> </h3>
<p> Assemble multiple-column text into a single column, by placing the text from the left-most column
    first and that from the next one after it, and so on. You don't need to do anything
    to mark where the columns were split, just run them all together. (This does not apply to tables.)
    </p>

<h3><a name="illust">Illustrations</a> </h3>
<p> Text for an illustration should be surrounded by <tt>[Illustration:
    the-text-caption]</tt>.  If there is no text caption, just place
    <tt>[Illustration]</tt> there. If it is in the middle of a paragraph or on the side
    of a paragraph, move the <tt>[Illustration: the-text] </tt>to either above or below
    the paragraph, based on where you can put it without it being in the middle of a
    paragraph.  If the text caption is printed on multiple lines, put it that way in
    your proofed text.  </p>
<p align="left" style="margin-bottom: 0cm;"><br>
</p>
<table width="100%" border="1" cellpadding="4"
 cellspacing="0" summary="Illustrations">
  <col width="256*"> <tbody>
    <tr>
      <td width="100%" valign="top">
      <p>Sample Image</p>
      </td>
    </tr>
    <tr align="center">
      <td width="100%" valign="top"> <img src="illust.png" alt=""
          width="570" height="780"> <br>
      </td>
    </tr>
    <tr>
      <td width="100%" valign="top">
       <p>Correct Text</p>
      </td>
   </tr>
    <tr>
      <td width="100%" valign="top">
          <p><tt>[Illustration: Martha told him that he had always been her ideal and <br>
                 that she worshipped him.                                             <br>
                 &lt;i&gt;Frontispiece                                                <br>
                 Her Weight in Gold&lt;/i&gt;]
          </tt></p>
      </td>
    </tr>
  </tbody>
</table>

<h3><a name="footnotes">Footnotes/Endnotes</a> </h3>
<p> <b>Footnotes are placed out-of-line</b>; that is, the text of the footnote is left
    at the bottom of the page and a tag placed where it is referenced in the text.</p>

<p> During proofing, this means:</p>

<p> 1. the number, letter, *, or other character that marks a footnote location should
    be surrounded with brackets (<tt>[</tt> and <tt>]</tt>).  Sometimes footnotes
    are marked with a series of special characters (*, &dagger;, &Dagger;, &sect;,
    etc.) that are not available in standard ASCII.  In this case, we
    replace these with Capital letters in order (A, B, C, etc.) when proofing.
    Don't leave any space before the <tt>[</tt>--keep it right next to the word
    being footnoted. (This prevents it from ending up on a separate line when the
    paragraphs are eventually re-flowed.) </p>
<p> 2. at the bottom of the page, where the text for that footnote is, surround it with
    <tt>[Footnote _: the-text]</tt>, inserting the footnote number, letter, or
    Roman numeral where the underline is. Be sure to use the same tag in the footnote
    as you used in the text where the footnote was referenced. </p>
  
<p> In some books, the Project Manager may ask that you move the footnotes
    in-line; read the Project Comments for instructions in this case.  </p>

<p>    See the <a href="#page_hf">Page Headers/Page Footers</a>
    image/text for an example footnote.</p>
 
<p> If there's a footnote at the bottom of the page with no footnote marker in the text,
    especially if it starts mid-sentence or mid-word,
    it's probably a continuation of a footnote from a previous page.  Leave it at the
    bottom of the page near the other footnotes, and surround it with <tt>*[Footnote:
    text-text]</tt> (without any footnote number or marker).  (The <tt>*</tt> indicates
    that the footnote was continued, and brings it to the attention of the
    post-processor.  </p>
<p> If a footnote continues on the next page (the page ends before the footnote does),
    leave the footnote at the bottom of the page, and just put an asterisk <tt>*</tt>
    where the footnote ends, like this: <tt>[Footnote 1:  text-text-text]*</tt>.  (The
    <tt>*</tt> indicates that the footnote ended prematurely, and brings it to the
    attention of the post-processor, who will eventually join it up with the rest of the
    footnote text.  </p>
<p> If a continued footnote ends or starts on a hypenated word, mark both the footnote 
    and the word with *, thus: 
    <tt>[Footnote 1: This footnote is continued and the last word in it is also con-*]*</tt> 
    for the leading fragment, and <tt>*[Footnote: *tinued onto the next page.]</tt>. </p>
<p> If a footnote or endnote is referenced in the text but does not appear on that page,
    keep the footnote/endnote number or marker and surround it with brackets
    (<tt>[</tt> and <tt>]</tt>) and put a <tt>*</tt> next to it so the post-processor can
    find it. (This is common in scientific &amp; technical books, where footnotes are often
    grouped at the end of chapters.)</p>

<table border="1"  cellpadding="4" cellspacing="0" width="97%" align="center" summary="Footnote Examples">
  <col width="256*">
  <tbody>
    <tr>
      <th valign="top" align="left">Original Text:</th>
    </tr>
    <tr>
      <td valign="top">The principal persons involved in this argument were
          Caesar<sup>1</sup>, former military                                    <br>
          leader and Imperator, and the orator Cicero<sup>2</sup>.
          Both were of the aristocratic                                          <br>
          (Patrician) class, and were quite wealthy.                             <br>
     <hr align="left" width="50%" noshade size="2">
     <font size=-1><sup>1</sup> Gaius Julius Caesar.</font>                      <br>
     <font size=-1><sup>2</sup> Marcus Tullius Cicero.</font>
      </td>
    </tr>
    <tr>
      <th valign="top" align="left">Proofed with Out-of-Line Footnotes: </th>
    </tr>
      <tr valign="top">
      <td>
        <tt>
          The principal persons involved
          in this argument were Caesar[1],
          former military                                                        <br>
          leader and Imperator, and the orator Cicero[2].
          Both were of the aristocratic                                          <br>
          (Patrician) class, and were quite wealthy.</tt>			<br>
										<br>
         <tt>[Footnote 1: Gaius Julius Caesar.]                                 <br>
                                                                                <br>
         [Footnote 2: Marcus Tullius Cicero.]</tt>
      </td>
    </tr>  
  </tbody>
</table>
<p> In some books, footnotes are separated from the main text by a horizontal line. 
    We don't keep this so please just leave a blank line between the main text and the footnotes. 
    (See example above.)
</p>

<p> <b>Endnotes</b> are just footnotes that have been located together at the end of a
    chapter or at the end of the book, instead of on the bottom of each page. So these
    have to be done in the same manner as out-of-line footnotes:  where you find an
    endnote reference in the text, just surround it with <tt>[Footnote</tt> and <tt>]</tt>.  
    If you are proofing one of the ending pages with the endnotes text on it,
    surround the text of each note with <tt>[Footnote _: text-text-text]</tt>, putting
    the footnote number or marker where the underline is, and the actual text for
    "text-text-text".  Put a blank line after each one, so that they stay separate
    paragraphs when the text is re-flowed in post-processing. </p>
 <!-- Need an example of Endnotes, maybe? Good idea!-->

<p> <b>Footnotes in <a href="#poetry">Poetry</a> or <a href="#tables">Tables</a></b>
    should be treated the same as other footnotes. Proofers should tag them and leave them
    at the bottom of the page; the post-processor will decide on the final placement.</p>

<table width="97%" border="1"  cellpadding="4" cellspacing="0" summary="Footnotes">
  <col width="256*">
  <tbody>
    <tr>
      <th valign="top">Original Footnoted Poetry</th>
      <th valign="top">Proofed Text</th>
    </tr>
    <tr>
      <td valign="top">Mary had a little lamb<sup>1</sup>                        <br>
     &nbsp;&nbsp;&nbsp;Whose fleece was white as snow                            <br>
                       And everywhere that Mary went                             <br>
     &nbsp;&nbsp;&nbsp;The lamb was sure to go!                                  <br>
     <hr align="left" width="50%" noshade size=2>
     <font size=-2><sup>1</sup> This lamb was obviously of the Hampshire breed,  <br>
     well known for the pure whiteness of their wool. </font>
      </td>
      <td valign="top">
<pre>
/*
Mary had a little lamb[1]
  Whose fleece was white as snow
And everywhere that Mary went
  The lamb was sure to go!
*/</pre>
          <tt>
          [Footnote 1: This lamb was obviously of the Hampshire breed,           <br>
          well known for the pure whiteness of their wool.]                      <br>
          </tt>
      </td>
    </tr>
  </tbody>
</table>

<h3><a name="italics">Italics</a> </h3>
<p> Text that is italicized should have <tt>&lt;i&gt;</tt> inserted at the start and
    <tt>&lt;/i&gt;</tt> inserted at the end of the italics. (Note the "/" in the closing
    symbol.)
   </p>

    <p>
    Punctuation goes OUTSIDE the italics, unless it is an entire sentence or section
    that is being italicized, or the punctuation is itself part of a phrase, title
    or abbreviation that is being italicized. (For instance, the . that mark that
    words in the title of a journal like <i>Phil. Trans.</i> have been abbreviated
    is part of the title for italicization 
    purposes, and are included within the italic tags, thus:
    <tt>&lt;i&gt;Phil. Trans.&lt;/i&gt;</tt>)
  
    <br>
    See the <a href="#illust">Illustration</a> image for an example of how to do the
    italics.  </p>

<p>
   You do not need to mark as italics common scholarly abbreviations, such as e.g.,
   i.e., ibid., etc., even if they appear italicized in the page image.  This was a
   common typesetters convention of the time, to indicate that these abbreviations
   originated from Latin.  </p>
<p>
   You also don't need to mark as italics common abbreviations for currency, for
   example English pounds, shillings, pence (<i>l., s., d.</i>), even if italicized on
   the original page.  This was a typesetting convention, but it doesn't help the
   author's meaning, and is distracting to a modern reader in an e-book version.  </p>
<p>
   Many fonts, especially older ones, used the same design for numbers in both regular
   and italics.  So for dates and similar phrases, just mark the whole phrase as
   italics, rather than marking the words as italics and the numbers as non-italics.
   For example:  </p>
 
    
<table width="90%" border="1"  cellpadding="4" cellspacing="0" summary="Italics">
  <col width="256*">
  <tbody>
    <tr>
      <th valign="top">Original Text</th>
      <th valign="top">Correct Text</th>
      <th valign="top">Over-corrected Text</th>
    </tr>
    <tr>
      <td valign="top"><i>Enacted </i>4<i> July, </i>1776 </td>
      <td valign="top"><tt>&lt;i&gt;Enacted 4 July, 1776&lt;/i&gt;</tt> </td>
      <td valign="top"><tt>&lt;i&gt;Enacted&lt;/i&gt; 4 &lt;i&gt;July&lt;/i&gt;, 1776</tt> </td>
    </tr>
  </tbody>
</table>
    
<h3><a name="bold">Bold Text</a> </h3>
<p> Bold text (text printed in a heavier typeface) should be marked with
    <tt>&lt;b&gt;</tt> inserted before the bold text and <tt>&lt;/b&gt;</tt>after it.
    See the <a href="#page_hf">Page Headers/Page Footers</a> image/text for an example.
  </p>

<p> Some Project Managers may specify in the <a
    href="#comments">Project Comments</a> that bold text be rendered as all caps. </p>
    
<h3><a name="supers">Superscripts</a> </h3>
<p> Older books often abbreviated words as contractions, and printed them as
    superscripts, for example: <font color="red">
  <br> &nbsp; &nbsp; &nbsp; &nbsp; Gen<sup>rl</sup> Washington defeated L<sup>d</sup>
    Cornwall's army. <br>    </font> Unless the <a href="#comments">Project Comments</a>
    specify something else, insert a single quote (apostrophe) to identify this as an
    abbreviation/contraction, like this:
  <br> &nbsp; &nbsp; &nbsp; &nbsp;    <tt>Gen'rl Washington defeated L'd Cornwall's
    army.</tt> <br> Only change to the full word if the <a href="#comments">Project
    Comments</a> specifically say to do so, like this:
  <br> &nbsp; &nbsp; &nbsp; &nbsp; <tt>General Washington defeated Lord Cornwall's
    army.</tt> </p>
<p> Another way to mark this is with a caret <tt>^</tt> instead of the apostrophe to
    indicate the superscripting.
    This is common in scientific &amp; technical works, which have a lot of this.  They
    also use curly braces <tt>{</tt> and <tt>}</tt> when there are several letters
    superscripted.  Using this method, that line would be proofed like this:
  <br> &nbsp; &nbsp; &nbsp; &nbsp;    <tt>Gen^{rl} Washington defeated L^d Cornwall's
    army.</tt> </p>
 <!-- The last is a terrible example to use and I would substitute a scientific one-->

    
<h3><a name="underl">Underlined Text</a> </h3>
<p> Mark as <a href="#italics">Italics</a>, with <tt>&lt;i&gt;</tt> and
    <tt>&lt;/i&gt;</tt>, unless the <a href="#comments">Project Comments</a> specifically
    say to use <tt>&lt;u&gt;</tt> and <tt>&lt;/u&gt;</tt> in this book.
    Underlining was used to indicate emphasis when the
    typesetter was unable to actually italicize the text, for example in a typewritten
    document.  </p>
    
<h3><a name="spaced">S p a c e d &nbsp; O u t  Text (gesperrt)</a></h3>
<p> Mark as <a href="#italics">Italics</a>, with <tt>&lt;i&gt;</tt> and
    <tt>&lt;/i&gt;</tt>, and remove the extra spaces.  This was a typesetting technique
    used to emphasize a piece of text in older German (and some Italian) books.  Italics
    serve that purpose for modern readers, and extra spacing may not be clear on all the
    different screen sizes &amp; fonts where people may read the final e-book. </p>

<h3><a name="font_sz">Font size changes</a> </h3>
<p> Don't do anything to mark changes in font size.  When the book is converted to
    electronic form, it will all be plain ASCII text in the same font. The exception
    to this is when the font size changes to indicate a 
    <a href="#block_qt">block quotation</a>; then mark the
    text as specified for those (<tt>/#</tt> at the start and <tt>#/</tt> at the end).
    </p>
    
<h3><a name="word_caps">Word in all Caps or Small Caps</a> </h3>
<p> If a word or words in the text are printed in all capital letters (including small
    caps), leave it that way in your proofed copy.  The exception to this is the <a
    href="#chap_head">first word of a chapter or paragraph</a>: many old books put the
    first word of these in all caps; this should be changed to upper and lower case. </p>
    
<h3><a name="drop_caps">Large, Ornate opening Capital letter (Drop Cap)</a> </h3>
<p> Often the opening letter in a chapter, section, or paragraph is printed as
    a large and ornate graphic of the letter--proof this as just the letter.</p>
    
<h3><a name="eol_hyphen">End-of-line Hyphenation</a> </h3>
<p> Where a hyphen appears at the end of a line, join the two halves of the hyphenated
    word back together. If it is really a hyphenated word like well-meaning, join the
    two halves leaving the hyphen in-between. But if it was just hyphenated because it
    wouldn't fit on the line, and is not a word that is usually hyphenated, then join
    the two halves and remove the hyphen. Keep the joined word on the top line, and put
    a line break after it to preserve the line formatting--this makes it easier for
    the 2nd Round Proofreader. See the <a href="#chap_head">Chapter Headers</a> image
    for examples of each kind (nar-row turns into narrow, but low-lying keeps the
    hyphen). If it's the last word in a sentence and is followed by punctuation, then
    carry that punctuation onto the top line, too.
    </p>
<p> Words like to-day and to-morrow that we don't commonly hyphenate now were often
    hyphenated in the old books we are working on.  Leave them hyphenated the way the
    author did. If you're not sure if the author hyphenated it or not, leave the hyphen,
    put an <tt>*</tt> after it, and join the word together.  Like this:
    <tt>to-*day</tt>.  The asterisk will bring it to the attention of the post
    processor, who has access to all the pages, and can determine how the author
    typically wrote this word.  </p>
    
<h3><a name="eop_hyphen">End-of-page Hyphenation</a> </h3>
<p> Leave the hyphen at the end of the last line, but mark it with a <tt>*</tt> after
    the hyphen so the post-processor will notice it. On pages that start with part of a
    word from the previous page, place a <tt>*</tt> before the word.</p>
    
<h3><a name="em_dashes">Dashes, Hyphens, and Minus Signs</a> </h3>
<p> There are generally four such marks you will see in books:
  <ol compact>
    <li><i>Hyphens</i>.  These are used to <b>join</b> words together, or sometimes to
        join prefixes or suffixes to a word.
    <br>Leave these as a single hyphen, with no spaces on either side.
    <li><i>En-dashes</i>.  These are just a little longer, and are used for a
        <b>range</b> of numbers, or for a mathematical <b>minus</b> sign.
    <br>Proof these, too, as a single hyphen.  Spaces before or after are determined by the
        way it was done in the book; usually no spaces in number ranges, usually spaces
        around mathematical minus signs, sometimes both sides, sometimes just before.
    <li><i>Em-dashes &amp; long dashes</i>.  These serve as <b>separators</b> between
        words--sometimes for emphasis like this--or when a speaker gets a word caught in
        his throat--!
    <br>Proof these as two hyphens. Don't leave a space before or after,
        even if it looks like there was a space in the original book image.
    <li><i>Still longer dashes</i>.  These represent <b>omitted</b> or <b>censored</b>
        words or names.
    <br>Proof these as 4 hyphens.  When it represents a word, we leave appropriate space
        around it like it's really a word.  If it's only part of a word, then no
        spaces--join it with the rest of the word.
  </ol>
<p> Note: If a dash appears at the start or end of a line of your OCR'd text, join it with the
    other line so that there are no spaces or line breaks around it. Only if the
    author used a dash to start or end the paragraph or line of poetry or dialog
    should you leave it at the start or end of a line.  </p>
<p>
    Some examples:
    </p>
    
<table width="97%" border="1"  cellpadding="4" cellspacing="0" align="center" summary="Hyphens and Dashes">
  <col width="256*">
  <tbody>
    <tr>
      <th valign="top">Original Image</th>
      <th valign="top">Proofed Text</th>
      <th valign="top">Type</th>
    </tr>
    <tr>
      <td valign="top">semi-detached     </td>
      <td valign="top"><tt>semi-detached</tt> </td>
      <td> Hyphen</td>
    </tr>
    <tr>
      <td valign="top">four-part harmony </td>
      <td valign="top"><tt>four-part harmony</tt> </td>
      <td> Hyphen</td>
    </tr>
    <tr>
      <td valign="top">See pages 21&ndash;25 </td>
      <td valign="top"><tt>See pages 21-25</tt> </td>
      <td>En-dash</td>
    </tr>
    <tr>
      <td valign="top">&ndash;14&deg; below zero</td>
      <td valign="top"><tt>-14&deg; below zero</tt> </td>
      <td>En-dash</td>
    </tr>
    <tr>
      <td valign="top">X &ndash; Y = Z</td>
      <td valign="top"><tt>X - Y = Z</tt> </td>
      <td>En-dash</td>
    </tr>
    <tr>
      <td valign="top">I am hurt;&mdash;A plague on both your houses!&mdash;I am dead.</td>
      <td valign="top"><tt>I am hurt;--A plague on both your houses!--I am dead.</tt> </td>
      <td>Em-dash</td>
    </tr>
    <tr>
      <td valign="top">It is the east, and Juliet is the sun!&mdash;</td>
      <td valign="top"><tt>It is the east, and Juliet is the sun!--</tt> </td>
      <td>Em-dash</td>
    </tr>
    <tr>
      <td valign="top">As the witness Mr. &mdash;&mdash; testified, </td>
      <td valign="top"><tt>As the witness Mr. ---- testified,</tt> </td>
      <td>long dash</td>
    </tr>
    <tr>
      <td valign="top">As the witness Mr. S&mdash;&mdash; testified, </td>
      <td valign="top"><tt>As the witness Mr. S---- testified,</tt> </td>
      <td>long dash</td>
    </tr>
    <tr>
      <td valign="top">the famous detective of &mdash;&mdash;B Baker St.</td>
      <td valign="top"><tt>the famous detective of ----B Baker St.</tt> </td>
      <td>long dash</td>
    </tr>
    <tr>
      <td valign="top">&ldquo;You &mdash;&mdash; Yankee&rdquo;, she yelled.</td>
      <td valign="top"><tt>"You ---- Yankee", she yelled.</tt> </td>
      <td>long dash</td>
    </tr>
  </tbody>
</table>

<h3><a name="next_word">Single word at bottom of page</a>  </h3>
<p> In some old books, you will see a single word at the bottom of the page, usually
    printed near the right margin.  Delete this word.  Even if it's the second half of a
    hyphenated word, delete it.  (Don't join the word across pages, because the last
    half will be duplicated when someone else doing the next page leaves it there.) It
    is actually the first word on the next page of the book.  (That's called an
    "incipit".  It was printed here in these old books to make it easier for printers'
    helpers to bind the pages into a book, because many of them were actually unable to
    read, but they were able to match the shapes of the words so as to confirm they 
    had the page order correct.)</p>

<h3><a name="abbrev">Abbreviations</a> </h3>
<p> Remove all spaces in abbreviations, even if it appears that the typesetter included
    spaces (or partial spaces) in the printed version.  For example, proof as <tt>H.M.S.
    Pinafore</tt>, not as <tt>H.&nbsp;M.&nbsp;S.&nbsp;Pinafore</tt>.  Also proof as
    <tt>G.B. Shaw</tt>, not as <tt>G.&nbsp;B.&nbsp;Shaw</tt>.  (This avoids the problem
    of having the abbreviation being broken across lines when text is rewrapped on some
    e-book screens, which would be much less readable.) </p>
    
<h3><a name="contract">Contractions</a> </h3>
<p> Remove any extra space in contractions, for example: <tt>would&nbsp;n't</tt> should
    be <tt>wouldn't</tt>.  (This was an early printers convention, where they retained
    the space to indicate that 'would' and 'not' were originally separate words.  If you
    see the extra space next to the apostrophe, (<tt>wouldn&nbsp;'t</tt>) that is
    probably an OCR scanning issue.  Remove the extra space in either case.) </p>
    
<h3><a name="poetry">Poetry/Epigrams</a> </h3>
<p> This section applies to an occasional Poem or Epigram in a mainly non-poetry book.
    For an entire book of poetry, see the
    <a href="doc-poet.php">special guidelines for Poetry Books</a>.  </p>

<p> Mark poetry or epigrams so the post-processor can find the poetry more quickly. Insert a
    separate line with <tt>/*</tt> at the start of the poetry or epigram and a separate
    line with <tt>*/</tt> at the end. </p>

<p> Some poems have some lines that are indented relative to the others. This is usually 
    for one of two reasons:  </p>

<p> 1) The poet wrote them that way, with some lines more indented than others. </p>

<p> 2) The printer ran out of page-width to hold an unsually long line and inserted a 
    line-break, with the trailing fragment moved to the next line and indented. </p>

<p> Type 1), reflecting the author's intent (and often also the internal structure of the 
    poem's rhythmic or rhyming schemes), we keep, by adding enough spaces in front of 
    the lines with extra indenting to make it resemble the original. </p>

<p> Type 2), reflecting the printer's attempts to save the expense of wider paper, 
    we undo, rejoining the broken fragment of the line back with the beginning of it, 
    all on one long line. (Such a line may have to be rebroken during PPing, but that's 
    for the PP to determine, not the proofer). </p>

<p> How do you tell type 1) (author's indenting, keep) from type 2) (printer's indenting, undo)? 
    There are some common patterns you can use. Not all will apply in all cases. </p> 

<p> Lines with type 1) indents (author's, keep) usually start with an upper case letter. 
    Often lines that rhyme with each other are indented a similar amount (you may for instance 
    get every second line rhyming, so that lines 2 and 4 rhyme, and they are indented, while 
    lines 1 and 3, which may or may not rhyme, are not indented. This is a very common pattern, 
    but there are many others). </p>

<p> Lines with type 2) indents (printer's, rejoin) usually start with a lower case letter, 
    and rather than occurring at regular places in the metre of the poem, as type 1) indents
    often do, will appear randomly, depending on the lengths of the words in the line.</p> 

<p> If the poetry was centered on the printed page, don't bother trying to center lines of 
    poetry during proofing; that won't work for an e-book viewed with many different
    screen sizes. </p>

<p> <b>Footnotes</b> in poetry should be treated the same as usual footnotes during proofing.
    See <a href="#footnotes">footnotes</a> for details. </p>

<p> <b>Line Numbers</b> in poetry should be kept.  Put them at the end of the
    line, leaving at least 6 spaces between them and the end of the text.
    See <a href="#line_no">Line Numbers</a> for details. </p>
    
<table width="100%" border="1"  cellpadding="4"
       cellspacing="0" summary="Poetry Example"> <col width="256*">
  <tbody>
    <tr>
      <td width="100%" valign="top"> <p>Sample Image</p>
      </td>
    </tr>
    <tr align="center">
      <td width="100%" valign="top"> <img src="poetry.png" alt=""
          width="750" height="256"> <br>
      </td>
    </tr>
    <tr>
      <td width="100%" valign="top"> <p>Correct Text</p>
      </td>
    </tr>
    <tr>
      <td width="100%" valign="top">
          <tt>
                                               <br>
          /*                                   <br>
      Here lies our Sovereign Lord the King, <br>
      &nbsp;&nbsp;Whose word no man relies on,         <br>
      Who never said a foolish thing,        <br>
      &nbsp;&nbsp;Nor ever did a wise one.             <br>
          */                                   <br>
                                               <br>
          The next twenty years are of such disgrace and national weakness <br>
          that the historian hesitates to write about them. It was called the <br>
          </tt>
      </td>
    </tr>
  </tbody>
</table>
    
<h3><a name="letter">Letter Indentation</a> </h3>
<p> Leave letters unindented, like you would for <a href="#para_space">paragraphs</a>.
    Instead of indenting put a blank line before the start of the letter. </p>
<p> Mark consecutive heading or footing lines (such as addresses, date blocks or signatures) with 
    <tt>/*</tt> on a line before them, and <tt>*/</tt> on a line after them, as if they were poetry, 
    so that they are kept as individual lines in post-processing and not rewrapped. 
    Don't indent them, even if they are indented or right justified in the original--just 
    put them at the left margin. The post-processor will format them as needed. </p>
    
<h3><a name="lists">Lists of Items</a> </h3>
<p> Mark these similarly to poetry; insert a line with <tt>/*</tt> before the list, and
    insert a line with <tt>*/</tt> after the list.  This marking tells the post
    processor that this section of text should be kept as separate lines, and not
    re-flowed into paragraphs.  Mark it this way for any such list that should not be
    reformatted, including lists of questions &amp; answers, items in a recipe, etc.
    (But often in a cookbook made up mostly of recipes the Project Manager will say not
    to bother marking each list of ingredients.) </p>
    
<h3><a name="tables">Tables</a> </h3>
<p> Mark tables so the post-processor can find them by surrounding them with <tt>/*</tt>
    and <tt>*/</tt>, like <a href="#poetry">poetry</a> above. Format the table with
    spaces to look approximately like the original table.  Don't make the table wider
    than 70 characters.
  <br> It's often hard to format tables in plain ASCII text; just do your best.
    Remember that the goal is to preserve the Author's meaning, while producing a
    readable table in an e-book.  Sometimes this requires sacrificing the original
    format of the table on the printed page. Check the Project Comments and discussion
    thread because other proofers may have settled on a specific format.</p>
<p> <b>Footnotes</b> in tables should go at the end of the table.  See
    <a href="#footnotes">footnotes</a> for details.
    </p>
    
<h3><a name="block_qt">Block Quotations</a> </h3>
<p> These are long quotations (typically several lines) included in the text. They are
    often (but not always) printed more narrowly (with wider margins) or in a smaller font
    size--sometimes but not always, both.  Mark block quotations so the post-processing tools can 
    automatically indent them and rewrap them by surrounding them with <tt>/#</tt> and <tt>#/</tt>. 
    Do not indent the text in a block quote, and, just as when proofing ordinary text, 
    leave the line breaks as they are in the image (hyphenated end-of-line words should still be rejoined) 
    for the convenience of proofers in later rounds, or the post-processor 
    (who may also want to check the text against the image). </p>
 <!-- need example image and text-->
    
<h3><a name="double_q">Double Quotes</a> </h3>

<p> Please try to just use the plain <font color="red">"</font> double quote,
    since the directional double quotes <font color="red">&ldquo;</font> and <font
    color="red">&rdquo;</font> will have to be replaced to make it ASCII compliant.</p>
<p> For quotes from non-English languages, use the quotation marks that are appropriate
    to that language, if they are available in the Latin-1 character set (the special 
    characters in the drop-down lists in the proofing interface are all in Latin-1).  
    For example, the quotation marks used in some German texts, 
    <font color="red"> &bdquo;</font><tt>like this</tt><font color="red">&rdquo;</font> 
    are NOT in Latin-1 but the French equivalent, guillemets,  
    <font color="red">&laquo;</font><tt>like this</tt><font color="red">&raquo;</font>, 
    are.  (As always, the Project Manager might instruct
    you to do these differently for a particular book). </p>
<p> Also, do not change single quotes to double quotes or vice versa.  Leave them as the Author wrote
    them.  See the <a href="#chap_head">Chapter Headers</a> image and text for an
    example. </p>
    
<h3><a name="single_q">Single Quotes</a> </h3>
<p> Single quotes are used for a variety of purposes.  They sometimes are used
    throughout where current usage would be double quotes--they should be left as
    printed.  They are also used for slang words or shortened versions (contractions).
    Try to put them the way the image shows them.  Last of all, please use
    the plain ASCII <tt>'</tt> single quote (apostrophe) to make it easier for
    everyone.</p>
    
<h3><a name="quote_ea">Quote Marks on each line</a>  </h3>
<p> Old books sometimes put quote marks at the beginning of each line of a quotation;
    remove them except for the first line.  But if the quotation goes on for multiple
    paragraphs, each paragraph should have an opening quote mark on the first line of
    the paragraph.  Often there is no closing quote mark until the very end of the
    quotation, after the last paragraph; if so, leave it that way.  Sometimes that last
    paragraph of the quotation is on the next page, so you will not see any closing
    quote mark at all.  If so, leave it that way--don't add closing quote marks that
    aren't on the page image.  (Note that this means that the proofed text for
    multi-paragraph quotes will have more opening quotes than ending quotes.  That's
    fine, our post-processing software expects this.) </p>

    
<h3><a name="period_s">Periods Between Sentences</a> </h3>
<p> Single space after periods (not two spaces). But don't bother to remove double
    spaces after periods if they're already in the scanned text--we can do that
    automatically in post-processing.  See the <a href="#chap_head">Chapter Headers</a>
    image and text for an example. </p>
    
<h3><a name="punctuat">Punctuation</a> </h3>
<p> In general, there is no space before punctuation characters (except the opening
    quote). Books typeset in the 1700's &amp; 1800's often had a partial space inserted
    before punctuation such as a semicolon or comma.  If scanned text has a space before
    punctuation, remove it. </p>

<table width="70%" border="1"  cellpadding="4" cellspacing="0" summary="Punctuation">
  <col width="256*">
  <tbody>
    <tr>
      <th valign="top">Scanned Text</th>
      <th valign="top">Correct Text</th>
    </tr>
    <tr>
      <td valign="top"><tt>and so it goes&nbsp;; ever and ever.</tt></td>
      <td valign="top"><tt>and so it goes; ever and ever.</tt> </td>
    </tr>
  </tbody>
</table>
    
<h3><a name="line_br">Line Breaks</a> </h3>
<p> Leave all line breaks in so that the next proofreader can compare the text easily.
    Especially watch this when fixing <a href="#eol_hyphen">hyphenated words</a>.  Extra
    blank lines that are not in the image should be removed.  But a blank line at
    the top or bottom of the page is OK--these are removed automatically in
    post-processing.  (Exceptions: the way we mark text for
    <a href="#footnotes">Footnotes</a>, and for
    <a href="#poetry">Poetry/Epigrams</a> will sometimes cause extra line breaks.)
    See the <a href="#chap_head">Chapter Headers</a> image and text for
    an example. </p>
    <!-- We should have an example right here for this. -->
    
<h3><a name="extra_sp">Extra spaces or tabs between Words</a> </h3>
<p> Extra spaces between words are a common OCR error.  You don't need to bother
    removing those spaces&mdash;that can be done automatically in post-processing.  Same with
    tab characters instead of spaces&mdash;those too can be fixed automatically.  But extra
    spaces around punctuation, em-dashes, quote marks, etc. do need to be removed when
    they separate the symbol from the word.  For example, in <b>A
    horse&nbsp;;&nbsp;&nbsp;&nbsp;my kingdom for a horse.</b> the space between "horse"
    and the semicolon needs to be removed.  But the 2 spaces after the semicolon are
    OK--you needn't bother deleting one of them. (It's not incorrect to do so, though.) </p>
    
<h3><a name="line_no">Line Numbers</a> </h3>
<p> These are numbers in the margin for each line, or sometimes every fifth or tenth 
    line&mdash;common in some poetry books.  Keep
    line numbers in poetry.  Place them at least six spaces past the right hand end of the line 
    (whichever side of the line they originally appeared), for the convenience of our 
    post-processing software. (Since 
    the text of poetry will not be reformatted in the e-book version, the line numbers
    will be useful to readers.)</p>

<p> Remove line numbers from ordinary text.  This will be reformatted in the e-text
    version, so the line numbers will not be useful to readers.</p>
    <!-- We need an example image and text for this. -->
    
<h3><a name="extra_s">Extra Spacing/Stars/Line Between Paragraphs</a></h3>
<p> The great majority of books usually have the start of one paragraph on the line 
    immediately after the close of the previous one. In such books, two paragraphs are 
    occasionally separated by some extra vertical spacing (which may take the form of a 
    line of stars, hyphens or some other character, a plain or floridly decorated 
    horizontal line or even just a blank line). These all count as "thought breaks" 
    and may occur for a change in scene or subject, a lapse in time or for a bit of 
    suspense. These are intended by the author, so we 
    preserve them by putting a blank line, 5 *'s indented 7 spaces and then 7 spaces
    apart, like so:<br>
<tt><br>
end of the line of text.<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br>
<br>
Text starts up again.</tt><br>
(The enhanced proofreading interface has this separator available to cut
 &amp; paste.) <br> See the <a href="#page_hf">Page Headers/Page Footers</a>
image/text for an example.</p>
    
<h3><a name="period_p">Period Pause &quot;...&quot; (Ellipsis)</a> </h3>
<p> Leave a space before the three dots, and a space after.  The exception is at the end
    of a sentence, when there would be no space, four dots, and a space after.  This is
    also the case for any other ending punctuation mark: the 3 dots follow immediately,
    without any space.  For example:
    <tt>
    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;That I know ... is true.
    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is the end....
    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wherefore art thou Romeo?...
    </tt></p>
<p>    <i>Sometimes you'll see it with the punctuation at the end; so proof it that way:</i>
    <tt>
    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wherefore art thou Romeo...?
    </tt>
    Remove extra dots, if any, or add new ones, if necessary, to bring the number to three (or four) as appropriate.
    </p>
    
<h3><a name="a_chars">Accented/Non-ASCII Characters</a> </h3>
<p> Try to put in the proper accented or Non-ASCII characters.<br>
    But there is a problem with using accented characters--they are upper
    ASCII, or characters above code 127. This can cause display problems for
    any computer not using the Western European character set (MS Windows
    codepage 1252 / ISO 8859-1 or -15). Furthermore, Apple never accepted
    ISO 8859 and some characters don't match up (a good example is the
    curly open quote (0147), which Apple maps to an accented capital O).
    Use with caution. </p>
<p> <b>For Windows</b>, there are several ways to get these characters: </p>
<ul compact>
  <li>you can use the character map program
     (Start: Run: charmap) to select an individual letter, and then cut &amp; paste.
  </li>
  <li>if using the enhanced proofreading interface, the <i>more</i> tag creates a pop-up
      window containing these characters, which you can then cut &amp; paste.
  </li>
  <li>or you can type the Alt+NumberPad shortcut codes for these characters.
      <br>(They're a lot faster than using cut &amp; paste,
          once you get used to the codes.)
      <br>You hold the Alt key and type the four digits on the
          <i>Number Pad</i> -- the number row over the letters won't work.
      <br>And you must type all 4 digits, including the leading 0.
          Note that the capital version of a letter is 32 less than the lower case.
      <br>(This is for the US-English keyboard layout. It may not work for other keyboards.)
      <br>The table below shows the codes we use.
          (<a href="charwin.pdf">Print-friendly version of this table)</a>
      <br>Don't use other special characters unless the Project Manager tells you to in
          the <a href="#comments">Project Comments</a>.
  </li>
</ul>
<br>
<table width="75%" border="6" rules="all" align="center" summary="Windows shortcuts">
  <tbody>
  <tr bgcolor=cornsilk  >
      <th colspan=14>Windows Shortcuts for Upper ASCII symbols</th>
  <tr bgcolor=cornsilk  >
      <th colspan=2>grav&egrave; </th>
      <th colspan=2>acut&eacute; (aigu)</th>
      <th colspan=2>^circumflex</th>
      <th colspan=2>~ tilde    </th>
      <th colspan=2>&uuml;mlaut</th>
      <th colspan=2>&deg; ring </th>
      <th colspan=2>&AElig; ligature</th>
  <tr><td align=center bgcolor=mistyrose>&agrave; </td><td>Alt-0224</td>
      <td align=center bgcolor=mistyrose>&aacute; </td><td>Alt-0225</td>
      <td align=center bgcolor=mistyrose>&acirc;  </td><td>Alt-0226</td>
      <td align=center bgcolor=mistyrose>&atilde; </td><td>Alt-0227</td>
      <td align=center bgcolor=mistyrose>&auml;   </td><td>Alt-0228</td>
      <td align=center bgcolor=mistyrose>&aring;  </td><td>Alt-0229</td>
      <td align=center bgcolor=mistyrose>&aelig;  </td><td>Alt-0230</td>
  <tr><td align=center bgcolor=mistyrose>&Agrave; </td><td>Alt-0192</td>
      <td align=center bgcolor=mistyrose>&Aacute; </td><td>Alt-0193</td>
      <td align=center bgcolor=mistyrose>&Acirc;  </td><td>Alt-0194</td>
      <td align=center bgcolor=mistyrose>&Atilde; </td><td>Alt-0195</td>
      <td align=center bgcolor=mistyrose>&Auml;   </td><td>Alt-0196</td>
      <td align=center bgcolor=mistyrose>&Aring;  </td><td>Alt-0197</td>
      <td align=center bgcolor=mistyrose>&AElig;  </td><td>Alt-0198</td>
  <tr><td align=center bgcolor=mistyrose>&egrave; </td><td>Alt-0232</td>
      <td align=center bgcolor=mistyrose>&eacute; </td><td>Alt-0233</td>
      <td align=center bgcolor=mistyrose>&ecirc;  </td><td>Alt-0234</td>
      <td>                                        </td><td>        </td>
      <td align=center bgcolor=mistyrose>&euml;   </td><td>Alt-0235</td>
      <td>                                        </td><td>        </td>
      <td>                                        </td><td>        </td>
  <tr><td align=center bgcolor=mistyrose>&Egrave; </td><td>Alt-0200</td>
      <td align=center bgcolor=mistyrose>&Eacute; </td><td>Alt-0201</td>
      <td align=center bgcolor=mistyrose>&Ecirc;  </td><td>Alt-0202</td>
      <td>                                        </td><td>        </td>
      <td align=center bgcolor=mistyrose>&Euml;   </td><td>Alt-0203</td>
      <td>                                        </td><td>        </td>
      <th colspan=2>                              </th>
  <tr><td align=center bgcolor=mistyrose>&igrave; </td><td>Alt-0236</td>
      <td align=center bgcolor=mistyrose>&iacute; </td><td>Alt-0237</td>
      <td align=center bgcolor=mistyrose>&icirc;  </td><td>Alt-0238</td>
      <td>                                        </td><td>        </td>
      <td align=center bgcolor=mistyrose>&iuml;   </td><td>Alt-0239</td>
      <td>                                        </td><td>        </td>
      <td>                                        </td><td>        </td>
  <tr><td align=center bgcolor=mistyrose>&Igrave; </td><td>Alt-0204</td>
      <td align=center bgcolor=mistyrose>&Iacute; </td><td>Alt-0205</td>
      <td align=center bgcolor=mistyrose>&Icirc;  </td><td>Alt-0206</td>
      <td>                                        </td><td>        </td>
      <td align=center bgcolor=mistyrose>&Iuml;   </td><td>Alt-0207</td>
      <th colspan=2 bgcolor=cornsilk>/ slash</th>
      <th colspan=2 bgcolor=cornsilk>&OElig; ligature</th>
  <tr><td align=center bgcolor=mistyrose>&ograve; </td><td>Alt-0242</td>
      <td align=center bgcolor=mistyrose>&oacute; </td><td>Alt-0243</td>
      <td align=center bgcolor=mistyrose>&ocirc;  </td><td>Alt-0244</td>
      <td align=center bgcolor=mistyrose>&otilde; </td><td>Alt-0245</td>
      <td align=center bgcolor=mistyrose>&ouml;   </td><td>Alt-0246</td>
      <td align=center bgcolor=mistyrose>&oslash; </td><td>Alt-0248</td>
      <td align=center bgcolor=mistyrose>&oelig;  </td><td>Use "oe"&nbsp;&dagger;</td>
  <tr><td align=center bgcolor=mistyrose>&Ograve; </td><td>Alt-0210</td>
      <td align=center bgcolor=mistyrose>&Oacute; </td><td>Alt-0211</td>
      <td align=center bgcolor=mistyrose>&Ocirc;  </td><td>Alt-0212</td>
      <td align=center bgcolor=mistyrose>&Otilde; </td><td>Alt-0213</td>
      <td align=center bgcolor=mistyrose>&Ouml;   </td><td>Alt-0214</td>
      <td align=center bgcolor=mistyrose>&Oslash; </td><td>Alt-0216</td>
      <td align=center bgcolor=mistyrose>&OElig;  </td><td>Use "Oe"&nbsp;&dagger;</td>
  <tr><td align=center bgcolor=mistyrose>&ugrave; </td><td>Alt-0249</td>
      <td align=center bgcolor=mistyrose>&uacute; </td><td>Alt-0250</td>
      <td align=center bgcolor=mistyrose>&ucirc;  </td><td>Alt-0251</td>
      <td>                                        </td><td>        </td>
      <td align=center bgcolor=mistyrose>&uuml;   </td><td>Alt-0252</td>
  <tr><td align=center bgcolor=mistyrose>&Ugrave; </td><td>Alt-0217</td>
      <td align=center bgcolor=mistyrose>&Uacute; </td><td>Alt-0218</td>
      <td align=center bgcolor=mistyrose>&Ucirc;  </td><td>Alt-0219</td>
      <td>                                        </td><td>        </td>
      <td align=center bgcolor=mistyrose>&Uuml;   </td><td>Alt-0220</td>
      <th colspan=2 bgcolor=cornsilk>currency     </th>
      <th colspan=2 bgcolor=cornsilk>mathematics  </th>
  <tr><td>                                        </td><td>        </td>
      <td>                                        </td><td>        </td>
      <td>                                        </td><td>        </td>
      <td>                                        </td><td>        </td>
      <td align=center bgcolor=mistyrose>&yuml;   </td><td>Alt-0255</td>
      <td align=center bgcolor=mistyrose>&cent;   </td><td>Alt-0162</td>
      <td align=center bgcolor=mistyrose>&plusmn; </td><td>Alt-0177</td>
  <tr><td>                                        </td><td>        </td>
      <td>                                        </td><td>        </td>
      <th colspan=2 bgcolor=cornsilk>literary     </th>
      <td>                                        </td><td>        </td>
      <td align=center bgcolor=mistyrose>&Yuml;   </td><td>Alt-0159</td>
      <td align=center bgcolor=mistyrose>&pound;  </td><td>Alt-0163</td>
      <td align=center bgcolor=mistyrose>&times;  </td><td>Alt-0215</td>
  <tr><th colspan=2 bgcolor=cornsilk>&ccedil;edilla </th>
      <th colspan=2>                              </th>
      <td align=center bgcolor=mistyrose>&copy;   </td><td>Alt-0169</td>
      <th colspan=2 bgcolor=cornsilk>~ tilde      </th>
      <th colspan=2 bgcolor=cornsilk>punctuation  </th>
      <td align=center bgcolor=mistyrose>&yen;    </td><td>Alt-0165</td>
      <td align=center bgcolor=mistyrose>&divide; </td><td>Alt-0247</td>
  <tr><td align=center bgcolor=mistyrose>&ccedil; </td><td>Alt-0231</td>
      <td>                                        </td><td>        </td>
      <td align=center bgcolor=mistyrose>&reg;    </td><td>Alt-0174</td>
      <td align=center bgcolor=mistyrose>&ntilde; </td><td>Alt-0241</td>
      <td align=center bgcolor=mistyrose>&iquest; </td><td>Alt-0191</td>
      <td>                                        </td><td>        </td>
      <td align=center bgcolor=mistyrose>&not;    </td><td>Alt-0172</td>
  <tr><td align=center bgcolor=mistyrose>&Ccedil; </td><td>Alt-0199</td>
      <td>                                        </td><td>        </td>
      <td align=center bgcolor=mistyrose>&trade;  </td><td>Alt-0153</td>
      <td align=center bgcolor=mistyrose>&Ntilde; </td><td>Alt-0209</td>
      <td align=center bgcolor=mistyrose>&iexcl;  </td><td>Alt-0161</td>
      <td>                                        </td><td>        </td>
      <td align=center bgcolor=mistyrose>&deg;    </td><td>Alt-0176</td>
  </tbody>
</table>
<p>  &dagger;&nbsp;
    Note that the ligatures &oelig; and &OElig; are becoming obsolete in English.
    In most cases, the two individual
    letters have replaced them.  (Thus &OElig;dipus becomes Oedipus.)
    Check the <a href="#comments">Project Comments</a> to see if the Project Manager
    wants you to use the ligature, otherwise use the two individual letters.</p>
<p> <b>For Apple Macintoshs</b>, there are also several ways to get these characters: </p>
<ul compact>
  <li>you can use the Apple Key Caps program as a reference.  (In OS 9 &amp; earlier, it's
      located in the Apple Menu; in OS X, it's located in Applications, Utilities folder.)
      This brings up a picture of the keyboard, and pressing shift, opt, command, or
      combinations of those keys shows how to produce each character.  Use this
      reference to see how to type that character, or you can cut &amp; paste it from
      here to the document.
  </li>
  <li>if using the enhanced proofreading interface, the
      <i>more</i> tag creates a pop-up window containing these characters, which you can
      then cut &amp; paste.
  <li>or you can type the Apple Opt- shortcut codes for these characters.
      <br>(They're a lot faster than using cut &amp; paste,
           once you get used to the codes.)
      <br>You hold the Opt key and type the accent symbol, then type the letter to be accented
          (or, for some codes, only hold the Opt key and type the symbol).
      <br>(This is for the US-English keyboard layout. It may not work for other keyboards.)
      <br>The table below shows the codes we use.
          (<a href="charapp.pdf">Print-friendly version of this table)</a>
      <br>Don't use other special characters unless the Project Manager tells you to in
          the <a href="#comments">Project Comments</a>.
  </li>
</ul>
<br>
<table width="75%" border="6" rules="all" align="center" summary="Mac shortcuts">
  <tbody>
  <tr bgcolor=cornsilk  >
      <th colspan=14>Apple Mac Shortcuts for Upper ASCII symbols</th>
  <tr bgcolor=cornsilk  >
      <th colspan=2>grav&egrave; </th>
      <th colspan=2>acut&eacute; (aigu)</th>
      <th colspan=2>^circumflex</th>
      <th colspan=2>~ tilde    </th>
      <th colspan=2>&uuml;mlaut</th>
      <th colspan=2>&deg; ring </th>
      <th colspan=2>&AElig; ligature</th>
  <tr><td align=center bgcolor=mistyrose>&agrave; </td><td>Opt-~, a</td>
      <td align=center bgcolor=mistyrose>&aacute; </td><td>Opt-e, a</td>
      <td align=center bgcolor=mistyrose>&acirc;  </td><td>Opt-i, a</td>
      <td align=center bgcolor=mistyrose>&atilde; </td><td>Opt-n, a</td>
      <td align=center bgcolor=mistyrose>&auml;   </td><td>Opt-u, a</td>
      <td align=center bgcolor=mistyrose>&aring;  </td><td>Opt-a   </td>
      <td align=center bgcolor=mistyrose>&aelig;  </td><td>Opt-'   </td>
  <tr><td align=center bgcolor=mistyrose>&Agrave; </td><td>Opt-~, A</td>
      <td align=center bgcolor=mistyrose>&Aacute; </td><td>Opt-e, A</td>
      <td align=center bgcolor=mistyrose>&Acirc;  </td><td>Opt-i, A</td>
      <td align=center bgcolor=mistyrose>&Atilde; </td><td>Opt-n, A</td>
      <td align=center bgcolor=mistyrose>&Auml;   </td><td>Opt-u, A</td>
      <td align=center bgcolor=mistyrose>&Aring;  </td><td>Opt-A   </td>
      <td align=center bgcolor=mistyrose>&AElig;  </td><td>Opt-"   </td>
  <tr><td align=center bgcolor=mistyrose>&egrave; </td><td>Opt-~, e</td>
      <td align=center bgcolor=mistyrose>&eacute; </td><td>Opt-e, e</td>
      <td align=center bgcolor=mistyrose>&ecirc;  </td><td>Opt-i, e</td>
      <td>                                        </td><td>        </td>
      <td align=center bgcolor=mistyrose>&euml;   </td><td>Opt-u, e</td>
      <td>                                        </td><td>        </td>
      <td>                                        </td><td>        </td>
  <tr><td align=center bgcolor=mistyrose>&Egrave; </td><td>Opt-~, E</td>
      <td align=center bgcolor=mistyrose>&Eacute; </td><td>Opt-e, E</td>
      <td align=center bgcolor=mistyrose>&Ecirc;  </td><td>Opt-i, E</td>
      <td>                                           </td><td>     </td>
      <td align=center bgcolor=mistyrose>&Euml;   </td><td>Opt-u, E</td>
      <td>                                           </td><td>     </td>
  <tr><td align=center bgcolor=mistyrose>&igrave; </td><td>Opt-~, i</td>
      <td align=center bgcolor=mistyrose>&iacute; </td><td>Opt-e, i</td>
      <td align=center bgcolor=mistyrose>&icirc;  </td><td>Opt-i, i</td>
      <td>                                           </td><td>     </td>
      <td align=center bgcolor=mistyrose>&iuml;   </td><td>Opt-u, i</td>
      <td>                                           </td><td>     </td>
      <td>                                           </td><td>     </td>
  <tr><td align=center bgcolor=mistyrose>&Igrave; </td><td>Opt-~, I</td>
      <td align=center bgcolor=mistyrose>&Iacute; </td><td>Opt-e, I</td>
      <td align=center bgcolor=mistyrose>&Icirc;  </td><td>Opt-i, I</td>
      <td>                                           </td><td>     </td>
      <td align=center bgcolor=mistyrose>&Iuml;   </td><td>Opt-u, I</td>
      <th colspan=2 bgcolor=cornsilk>/ slash</th>
      <th colspan=2 bgcolor=cornsilk>&OElig; ligature</th>
  <tr><td align=center bgcolor=mistyrose>&ograve; </td><td>Opt-~, o</td>
      <td align=center bgcolor=mistyrose>&oacute; </td><td>Opt-e, o</td>
      <td align=center bgcolor=mistyrose>&ocirc;  </td><td>Opt-i, o</td>
      <td align=center bgcolor=mistyrose>&otilde; </td><td>Opt-n, o</td>
      <td align=center bgcolor=mistyrose>&ouml;   </td><td>Opt-u, o</td>
      <td align=center bgcolor=mistyrose>&oslash; </td><td>Opt-o   </td>
      <td align=center bgcolor=mistyrose>&oelig;  </td><td>Use "oe"&nbsp;&dagger;</td>
  <tr><td align=center bgcolor=mistyrose>&Ograve; </td><td>Opt-~, O</td>
      <td align=center bgcolor=mistyrose>&Oacute; </td><td>Opt-e, O</td>
      <td align=center bgcolor=mistyrose>&Ocirc;  </td><td>Opt-i, O</td>
      <td align=center bgcolor=mistyrose>&Otilde; </td><td>Opt-n, O</td>
      <td align=center bgcolor=mistyrose>&Ouml;   </td><td>Opt-u, O</td>
      <td align=center bgcolor=mistyrose>&Oslash; </td><td>Opt-O   </td>
      <td align=center bgcolor=mistyrose>&OElig;  </td><td>Use "Oe"&nbsp;&dagger;</td>
  <tr><td align=center bgcolor=mistyrose>&ugrave; </td><td>Opt-~, u</td>
      <td align=center bgcolor=mistyrose>&uacute; </td><td>Opt-e, u</td>
      <td align=center bgcolor=mistyrose>&ucirc;  </td><td>Opt-i, u</td>
      <td>                                           </td><td>     </td>
      <td align=center bgcolor=mistyrose>&uuml;   </td><td>Opt-u, u</td>
  <tr><td align=center bgcolor=mistyrose>&Ugrave; </td><td>Opt-~, U</td>
      <td align=center bgcolor=mistyrose>&Uacute; </td><td>Opt-e, U</td>
      <td align=center bgcolor=mistyrose>&Ucirc;  </td><td>Opt-i, U</td>
      <td>                                           </td><td>     </td>
      <td align=center bgcolor=mistyrose>&Uuml;   </td><td>Opt-u, U</td>
      <th colspan=2 bgcolor=cornsilk>currency     </th>
      <th colspan=2 bgcolor=cornsilk>mathematics  </th>
  <tr><td>                                           </td><td>     </td>
      <td>                                           </td><td>     </td>
      <td>                                           </td><td>     </td>
      <td>                                           </td><td>     </td>
      <td align=center bgcolor=mistyrose>&yuml;   </td><td>Opt-u, y</td>
      <td align=center bgcolor=mistyrose>&cent;   </td><td>Opt-4   </td>
      <td align=center bgcolor=mistyrose>&plusmn; </td><td>Opt-+   </td>
  <tr><td>                                           </td><td>     </td>
      <td>                                           </td><td>     </td>
      <th colspan=2 bgcolor=cornsilk>literary     </th>
      <td>                                           </td><td>     </td>
      <td align=center bgcolor=mistyrose>&Yuml;   </td><td>Opt-u, Y</td>
      <td align=center bgcolor=mistyrose>&pound;  </td><td>Opt-3   </td>
      <td align=center bgcolor=mistyrose>&times;  </td><td>Opt-V   </td>
  <tr><th colspan=2 bgcolor=cornsilk>&ccedil;edilla </th>
      <th colspan=2>                                </th>
      <td align=center bgcolor=mistyrose>&copy;   </td><td>Opt-g   </td>
      <th colspan=2 bgcolor=cornsilk>~ tilde        </th>
      <th colspan=2 bgcolor=cornsilk>punctuation  </th>
      <td align=center bgcolor=mistyrose>&yen;    </td><td>Opt-y   </td>
      <td align=center bgcolor=mistyrose>&divide; </td><td>Opt-/   </td>
  <tr><td align=center bgcolor=mistyrose>&ccedil; </td><td>Opt-c   </td>
      <td>                                           </td><td>     </td>
      <td align=center bgcolor=mistyrose>&reg;    </td><td>Opt-r   </td>
      <td align=center bgcolor=mistyrose>&ntilde; </td><td>Opt-n, n</td>
      <td align=center bgcolor=mistyrose>&iquest; </td><td>Opt-?   </td>
      <td>                                        </td><td>        </td>
      <td align=center bgcolor=mistyrose>&not;    </td><td>Opt-l   </td>
  <tr><td align=center bgcolor=mistyrose>&Ccedil; </td><td>Opt-C   </td>
      <td>                                           </td><td>     </td>
      <td align=center bgcolor=mistyrose>&trade;  </td><td>Opt-2   </td>
      <td align=center bgcolor=mistyrose>&Ntilde; </td><td>Opt-n, N</td>
      <td align=center bgcolor=mistyrose>&iexcl;  </td><td>Opt-1   </td>
      <td>                                           </td><td>     </td>
      <td align=center bgcolor=mistyrose>&deg;    </td><td>Opt-*   </td>
  </tbody>
</table>
  
   
<h3><a name="d_chars">Characters with Diacritical marks</a> </h3>
<p>In some projects, you will find characters with special marks either above or below
   the normal latin A..Z character.  These are called <i>diacritical marks</i>, and
   indicate special pronunciation for this character.
   For proofing, we indicate them in our normal ASCII text by the following coding:<br>

<!-- 
  diacritical mark           above  below
macron (straight line)       [=x]   [x=]
2 dots (diaresis or umlaut)  [:x]   [x:]
1 dot                        [.x]   [x.]*
grave accent                 ['x]   [x']* or [/x] [x/]*
acute (aigu) accent          [`x]   [x`]* or [\x] [x\]*
circumflex                   [^x]   [x^]*
caron (v-shaped symbol)      [vx]   [xv]
breve (u-shaped symbol)      [)x]   [x)]
tilde                        [~x]   [x~]*
cedilla                      [,x]*  [x,]
  * indicates markings that are rare and seldom occur in our books.
-->
<table width="95%" border="6" rules="all" align="center" summary="Diacriticals">
  <tbody>
  <tr bgcolor="cornsilk">
      <th colspan=9>Proofing symbols for Diacritical marks</th>
  <tr bgcolor="cornsilk">
      <th>diacritical mark</th>
      <th>sample</th>
      <th>above </th>
      <th>below </th>
      <th>&nbsp;&nbsp;&nbsp;</th>
      <th>diacritical mark</th>
      <th>sample</th>
      <th>above </th>
      <th>below </th>
   </tr>
  <tr><td>macron (straight line)</td>
      <td align="center">&macr;</td>
      <td align="center"><tt>[=x]</tt></td>
      <td align="center"><tt>[x=]</tt></td>
      <td bgcolor="cornsilk">&nbsp;</td>
      <td>circumflex </td>
      <td align="center">&circ;</td>
      <td align="center"><tt>[^x]</tt></td>
      <td align="center"><tt>[x^]</tt>*</td> </tr>
  <tr><td>2 dots (diaresis, umlaut)</td>
      <td align="center">&uml;</td>
      <td align="center"><tt>[:x]</tt></td>
      <td align="center"><tt>[x:]</tt></td>
      <td bgcolor="cornsilk">&nbsp;</td>
      <td>caron (v-shaped symbol)</td>
      <td align="center"><font size="-2">&or;</font></td>
      <td align="center"><tt>[vx]</tt></td>
      <td align="center"><tt>[xv]</tt></td> </tr>
  <tr><td>1 dot </td>
      <td align="center">&middot;</td>
      <td align="center"><tt>[.x]</tt></td>
      <td align="center"><tt>[x.]</tt>*</td>
      <td bgcolor="cornsilk">&nbsp;</td>
      <td>breve (u-shaped symbol)</td>
      <td align="center"><font size="-2">&cup;</font></td>
      <td align="center"><tt>[)x]</tt></td>
      <td align="center"><tt>[x)]</tt></td> </tr>
  <tr><td>grave accent</td>
      <td align="center">`</td>
      <td align="center"><tt>[`x]</tt> or <tt>[\x]</tt></td>
      <td align="center"><tt>[x`]</tt> or <tt>[x\]</tt>*</td>
      <td bgcolor="cornsilk">&nbsp;</td>
      <td>tilde</td>
    <!-- which symbol to use??? -->
      <td align="center">&tilde; &sim;</td>
      <td align="center"><tt>[~x]</tt></td>
      <td align="center"><tt>[x~]</tt>*</td> </tr>
  <tr><td>acute accent (aigu)</td>
      <td align="center">&acute;</td>
      <td align="center"><tt>['x]</tt> or <tt>[/x]</tt></td>
      <td align="center"><tt>[x']</tt> or <tt>[x/]</tt>*</td>
      <td bgcolor="cornsilk">&nbsp;</td>
      <td>cedilla</td>
      <td align="center">&cedil;</td>
      <td align="center"><tt>[,x]</tt>*</td>
      <td align="center"><tt>[x,]</tt></td> </tr>
  <tr bgcolor="cornsilk">
      <td colspan=9>* indicates markings that are rare and seldom occur in our books.</td>
  </tbody>
</table>

<p>Be sure to include the square brackets (<tt>[ ]</tt>) around these, so the post
   proofer knows which letter it applies to.  They will eventually replace these with
   whatever symbol works in each version of the text they produce, like 7-bit ASCII,
   8-bit, Unicode, html, etc.  </p>
<p>Note that when some of these marks appear on some characters (mainly vowels) our standard
   Latin-1 character set already includes that character, with the marking.  So in that
   case, use the Latin-1 character (see <a href="#a_chars">here</a>), available from the
   drop down lists in the proofreading interface. </p>

    
    <h3><a name="f_chars">Non-English Characters</a> </h3>
<p>For text printed in non-English characters; that is, characters other than the Latin
        A...Z characters, for example <b>Greek</b>, <b>Cyrillic</b> (used in Russian &amp;
        other Slavic languages), <b>Hebrew</b>, or <b>Arabic</b> characters, there are two
        ways to deal with these. </p>
<p> The simplest way is just to mark it, and leave it for the post-processor to deal with.
        To do this, just surround the text with <tt>[Greek: **]</tt>, <tt>[Cyrillic:
        **]</tt>, <tt>[Hebrew: **]</tt>, or <tt>[Arabic: **]</tt> and leave it as scanned.
    Include the <tt>**</tt> so the post-processor can deal with it later. </p>
<p> The second method is more work, but provides a more accurate text. This involves
    converting each character of the foreign text into the equivalent ASCII Latin
    letter(s). The result should still be enclosed in <tt>[Greek: ]</tt> etc. tags. For
    example, <b>&Beta;&iota;&beta;&lambda;&omicron;&sigmaf;</b>
    would become <tt>[Greek: Biblos]</tt>. ("Book"--so appropriate for DP!)</p>

<p> <b>Tip:</b> Greek occurs so frequently there is a clickable tool in the interface to
    help you do the transliteration. Press the "Greek" button near the bottom of the
    screen to make it pop-up, then you can click on the Greek characters to have their
    standard transliterations automatically appear in the text box, ready to be
    transferred (manually by you, using cut-n-paste) back to the page you are
    proofreading when you have finished the transliteration. </p>

<ul compact>
  <li> Greek:
       <a href="http://promo.net/pg/vol/greek.html">Greek to ASCII Primer</a> (from
       Project Gutenberg) Or see the "Greek" pop-up tool in the proofreading interface.
  </li>
  <li> Cyrillic:
    <!--  Apparently dead link, as of Jan, 2004:
       <a href="http://www.history.uiuc.edu/steinb/translit/translit.htm">Transliteration Table</a>
    -->
       <a href="http://learningrussian.com/transliteration.htm">Transliteration Table</a>
  </li>
  <li> Hebrew:
       Not recommended unless you are fluent in Hebrew.  There are significant
       difficulties in Hebrew-to-ASCII transliteration (right-to-left reading order,
       vowels typically omitted in writing, different pronunciation schemes by region,
       etc.) and neither <a href="..">Distributed
       Proofreaders</a> nor <a href="http://www.gutenberg.net/">Project Gutenberg</a>
       has yet chosen a standard method.  Join the Forum discussion on this if you are
       interested.
  </li>
  <li> Arabic:
       Not recommended unless you are fluent in Arabic.  Like Hebrew, there are
       significant difficulties in Arabic-to-ASCII transliteration and neither <a
       href="..">Distributed Proofreaders</a> nor <a
       href="http://www.gutenberg.net/">Project Gutenberg</a> has yet chosen a
       standard method.
  </li>
</ul>
    
<h3><a name="fract_s">Fractions</a> </h3>
<p> For <b>fractions</b>, convert them like this: <tt>2&frac12;</tt> becomes
    <tt>2-1/2</tt>.</p>

<h3><a name="page_ref">Page References &quot;See Pg. 123&quot;</a> </h3>
<p> Some non-fiction works will reference themselves by giving a page number to go to,
    for example: (see p. 123). Please leave these references as they are within the text
    (even though we remove page numbers from the Table of Contents and the headers or footers of pages).
    Mark these page references with a <tt>*</tt>, as in <tt>(see p. 123*)</tt>, unless the Project Manager specifies not to
    in the <a href="#comments">Project Comments</a>. This will make it easier for the Post-Processor 
    to find them later. This is for page references within the main body of the text or within footnotes only; see
    below for page references within indexes.</p>
 
<h3><a name="bk_index">Indexes</a> </h3>
<p>Please retain page numbers in index pages unless requested otherwise, but do not mark them with a *. You don't need to align the numbers as they appear in the scan; just put a comma or semicolon, followed by the page numbers. 
</p>
<p>
    Indexes are often printed in 2 columns; this narrower space can cause entries to
    split onto the next line. Rejoin these back onto a single line.  See example below:
    </p>
<table width="75%" border="1"  cellpadding="4" cellspacing="0" summary="Indexes">
  <col width="256*">
  <tbody>
    <tr>
      <th valign="top">Scanned Text</th>
      <th valign="top">Proofed Text</th>
    </tr>
    <tr>
      <td valign="top">Elizabeth I, her royal Majesty the                  <br>
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Queen, 123, 144-155.  <br>
                       &nbsp;&nbsp;birth of, 145.                          <br>
                       &nbsp;&nbsp;christening, 146-147.                   <br>
                       &nbsp;&nbsp;death and burial, 152.                  <br>
                       Ethelred II, the Unready, 33.                       </td>
      <td valign="top"><tt>Elizabeth I, her royal Majesty the Queen, 123, 144-155. <br>
                       &nbsp;&nbsp;birth of, 145.                          <br>
                       &nbsp;&nbsp;christening, 146-147.                   <br>
                       &nbsp;&nbsp;death and burial, 152.                  <br>
                                                                           <br>
                       Ethelred II, the Unready, 33.</tt>                  </td>
    </tr>
  </tbody>
</table>
<p>
    For sub-topic listings in an index, start each one on a new line, indented 2 spaces.
    For example:                <br>
      <tt>
        &nbsp;&nbsp;Hooker, Jos., maj. gen. U. S. V., 345.                                 <br>
        &nbsp;&nbsp;&nbsp;&nbsp;assigned to command Porter's corps; 350.                   <br>
        &nbsp;&nbsp;&nbsp;&nbsp;afterwards, McDowell's; 367.                               <br>
        &nbsp;&nbsp;&nbsp;&nbsp;in pursuit of Lee; 380.                                    <br>
        &nbsp;&nbsp;&nbsp;&nbsp;at South Mt.; 382.                                         <br>
        &nbsp;&nbsp;&nbsp;&nbsp;unacceptable to Halleck, retires from active service. 390. <br>
                                                                                           <br>
        &nbsp;&nbsp;Hopkins, Henry H., 209.                                                <br>
        &nbsp;&nbsp;&nbsp;&nbsp;notorious secessionist in Kanawha valley; 217.             <br>
        &nbsp;&nbsp;&nbsp;&nbsp;controversy with Gen. Cox over escaped slave. 233.         <br>
                                                                                           <br>
        &nbsp;&nbsp;Hosea, Lewis M., 187.                                                  <br>
        &nbsp;&nbsp;&nbsp;&nbsp;capt. on Gen. Wilson's staff, 194.                         <br>
      </tt>
</p>
<p>
    Old books sometimes printed the first word of each letter in the index in all caps;
    change this to upper and lower case. </p>

<h3><a name="trail_s">Trailing Space at End-of-line</a> </h3>
<p> Do not bother putting spaces at the ends of lines of text. It is a waste of your time for
    something that we can take care of automatically later. Similarly do not waste your time
    taking out extra spaces at the ends of lines.</p>
    
<h3><a name="play_n">Play Actor Names/Stage Notes</a> </h3>
<p>Mark all actor names in italics if they are <a href="#italics">Italics</a> in the
    original text, mark them as bold if they are <a href="#bold">bold</a> in the
    original text.  And Stage Notes too: format them like they are in the original text.
    </p>

<!--we need better play guidelines-->
    
<h3><a name="anything">Anything else that needs special handling or that you're unsure of</a> </h3>
<p>If you run into something that isn't covered in these guidelines that you think needs
   special handling, or you run into something
   that you're not sure of, post your question in the Project Discussion thread, and put a
   note in the proofed text explaining the problem.
   Notes are quite helpful--they save the next proofer time by explaining what the
   question is.  Put square brackets <tt>[</tt> and <tt>]</tt> around your note so that
   is clearly separated from the Author's text. And mark it with 2 asterisks <tt>**</tt>
   for the next proofer.
   This signals the next proofer to stop and examine this text
   &amp; the matching image, and deal with it. (This does slow down the proofreading
   of this text, so don't do this unnecessarily.)
   </p>

<br>
<table width="100%" border="0" cellspacing="0" summary="Other Guidelines">
  <tbody>
    <tr>
      <td bgcolor="silver">&nbsp;</td>
    </tr>
  </tbody>
</table>
<br>
    
<h2><a name="sp_copy"></a>
    <a name="sp_ency"></a>
    <a name="sp_chem"></a>
    <a name="sp_math"></a>
    <a name="sp_poet"></a>
    Specific Guidelines for Special Books</h2>
<p> These special types of books have specific guidelines for them, that add to or
    modify the normal guidelines given in this document.  These books are often
    somewhat difficult, and are not recommended except to experienced proofreaders
    or people who are experts in the particular field.
 </p>
<p> Click on the link below when you need to see the guidelines for one of these
    special types of books. </p>
<ul compact>
  <li><b><a href="doc-ency.php">Encyclopedias</a>                    </b></li>
  <li><b><a href="doc-poet.php">Poetry Books </a>                    </b></li>
  <li><b>                        Chemistry Books    [to be completed.]</b></li>
  <li><b>                        Mathematics Books  [to be completed.]</b></li>
</ul>
    
<table width="100%" border="0" cellspacing="0" summary="Common Problems">
  <tbody>
    <tr>
      <td bgcolor="silver">&nbsp;</td>
    </tr>
  </tbody>
</table>
<h2>Common Problems</h2>
    
<h3><a name="OCR_1lI">1-l-I OCR Problems </a> </h3>
<p> OCR scanners commonly have trouble distinguishing between the digit one (1), the
    lowercase letter l, and the uppercase letter I.  This is especially true for some of
    our older books where the pages may be in poor condition. Watch out for these.  Read
    the context of the sentence to determine which is the correct character, but be
    careful--often your mind will automatically 'correct' these when you are reading.
    </p>
    
<h3><a name="OCR_other">Other OCR Problems </a> </h3>
<p> OCR scanners often have trouble with dashes &amp; hyphens, so watch for these.  The
    rule is to use one hyphen (minus sign) for a <a
    href="#eol_hyphen">hyphenated-word</a>; use 2 hyphens for a longer <a
    href="#em-dashes">dash (Em-dash)</a>.  And no spaces around either one. OCR'd text
    often has only one hyphen for a dash that should have 2. </p>

<p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  [...more to be added...] </p>

<h3><a name="hand_notes">Handwritten Notes in Book</a> </h3>
<p> Do not include handwritten notes in a book (unless it is overwriting faded, printed text to make it more visible). 
    Do not include handwritten marginal notes made by readers, etc.</p>
    
<h3><a name="bad_image">Bad Images</a> </h3>
<p> If an image is bad (not loading, chopped off, unable to be read), please put a post
    about this bad image in the project comments <a href="#forums">forum</a>.  Do not
    click on "Return Page to Round"; if you do, the page will be reissued to the next
    proofer.  Instead, click on the "Report Bad Page" button so this page is
    'quarantined'. </p>
<p> Note that some page images are quite big, and it's fairly common for your browser to
    have difficulty displaying them, especially if you have several windows open or are
    using an older computer.  Before reporting this as a bad page, try clicking on the
    "Image" line on the bottom of the page to bring up just the image in a new window.
    If that brings up a good image, then the problem is probably in your browser or
    system.  </p>
<p> It's fairly common for the image to be good, but the OCR scan is missing the first
    line or two of the text.  Please just type in the missing line(s).  If nearly all of
    the lines are missing in the scan, then either type in the whole page (if you are
    willing to do that), or just click on the "Return Page to Round" button and the page
    will be reissued to someone else.  If there are several pages like this, you might
    post a note in the project comments <a href="#forums">forum</a> to notify the
    Project Manager. </p>
    
<h3><a name="bad_text">Wrong Image for Text</a> </h3>
<p> If there is a wrong image for the text given, please put a post about this bad image
    in the project comments <a href="#forums">forum</a>.  Do not click on "Return Page
    to Round"; if you do, the page will be reissued to the next proofer.  Instead, click
    on the "Report Bad Page" button so this page is 'quarantined'.  </p>
    
<h3><a name="round1">Previous Proofreader Mistakes</a> </h3>
<p> If the previous proofreader made a lot of mistakes or missed a lot of things, you
    can send them a message by clicking on their name. That will allow you to send them
    a private forum message. <em>Please be nice!</em> These are people volunteering
    their help, usually trying their best.  The point of the message should be to inform
    them of the correct way to do proofreading, rather than criticize them as incompetent,
    careless, etc. <br> (If the previous proofreader did an outstanding job, you can
    also send them a message about that.) </p>
    
<h3><a name="p_errors">Printer Errors/Misspellings</a> </h3>
<p> Due to printer errors, there can be some misspellings. If you believe these to be
    true printer errors, then you should fix them. Some may be due to differences in
    spelling of words from a long time ago. Do not try to correct those to modern
    English.</p>
<p> Whenever you make a change like this, include a note describing what you changed:
    <tt>[*Transcriber's note: typo fixed, changed from "3/8 = .378" to "3/8 = .375"]</tt>
    Include an <tt>*</tt> so the post-processor will notice it. </p>

<h3><a name="f_errors">Factual Errors in Texts</a> </h3>
<p> In general, don't correct factual errors in the author's book.  Many of the books we
    are proofreading have statements of fact in them that we no longer accept as accurate.
    Leave them as the author wrote them. </p>
<p> A possible exception is in technical or scientific books, where a known formula or
    equation may be given incorrectly.  (Especially if it is shown correctly on other
    pages of the book.) Notify the Project Manager about these, either by sending them a
    message via the <a href="#forums">Forum</a>, or by inserting <tt>[sic*
    explain-your-concern]</tt> at that point in the text. </p>
<p> Whenever you make a change like this, include a note describing what you changed:
    <tt>[*Transcriber's note: typo fixed, changed from "3/8 = .378" to "3/8 = .375"]</tt>
    Include an <tt>*</tt> so the post-processor will notice it. </p>

<h3><a name="uncertain">Uncertain Items</a> </h3>
<p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  [...to be completed...] </p>
    
<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="silver" summary="Links">
<tr><td width="10">&nbsp;</td>
    <td width="100%" align="center"><font face="verdana, helvetica, sans-serif" size="1">
        Return to:
        <a href="..">Distributed Proofreaders home page</a>,
        &nbsp;&nbsp;&nbsp;
        <a href="faq_central.php">DP FAQ Central page</a>,
        &nbsp;&nbsp;&nbsp;
        <a href="http://www.gutenberg.net">Project Gutenberg home page</a>.
        </font>
    </td>
</tr>
</table>

<?
theme('','footer');
?>

