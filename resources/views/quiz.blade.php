<!DOCTYPE html> 
<html lang="en">
   @include('layouts.head') 
   <style> .containers { max-width: 900px; margin: 50px auto; background: #fff; border-radius: 14px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); overflow: hidden; } /* header { background: #004aad; color: #fff; text-align: center; padding: 25px; font-size: 22px; font-weight: 600; } */ /* Stepper */ .stepper { display: flex; justify-content: space-between; position: relative; background: #f9fbff; padding: 20px 60px; } .stepper::before { content: ""; position: absolute; top: 50%; left: 80px; right: 80px; height: 4px; background: #d6d9e6; transform: translateY(-50%); z-index: 0; } .step { position: relative; z-index: 1; text-align: center; width: 33%; } .step .step-icon { width: 50px; height: 50px; border-radius: 50%; background: #d6d9e6; color: #fff; display: flex; justify-content: center; align-items: center; margin: 0 auto; font-size: 20px; transition: all 0.4s ease; } .step.active .step-icon { background: #004aad; transform: scale(1.1); box-shadow: 0 4px 10px rgba(0, 74, 173, 0.3); } .step.completed .step-icon { background: #28a745; } .step-label { margin-top: 8px; font-size: 14px; font-weight: 500; color: #333; } /* Form styling */ form { padding: 35px 45px; } h3 { color: #004aad; font-size: 20px; border-left: 5px solid #004aad; padding-left: 10px; margin-bottom: 25px; } .form-group { margin-bottom: 15px; } label { display: block; font-weight: 500; margin-bottom: 6px; } input.form-control, select.form-control { width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc; font-size: 14px; } input:focus, select:focus { outline: none; border-color: #004aad; } .step-content { display: none; animation: fadeIn 0.4s ease; } .step-content.active { display: block; } @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } } .btn { background: #004aad; color: #fff; border: none; border-radius: 8px; padding: 10px 25px; font-size: 15px; cursor: pointer; transition: background 0.3s ease; } .btn:hover { background: #003580; } .buttons { display: flex; justify-content: space-between; margin-top: 25px; } .hidden { display: none; } table { width: 100%; border-collapse: collapse; margin-top: 10px; font-size: 14px; } th, td { padding: 10px 8px; border-bottom: 1px solid #e0e6f1; } tr:hover { background: #f6f8ff; } .total-box { margin-top: 25px; padding: 15px; background: #f0f4ff; border-radius: 10px; border: 1px solid #ccd7ff; font-size: 15px; } .summary-list { margin-top: 10px; line-height: 1.6; } .error { color: red; font-size: 13px; margin-top: 3px; } select.form-control { width: 100%; padding: 8px; border-radius: 8px; border: 1px solid #ccc; font-size: 14px; } .btn.focus, .btn:focus, .btn:hover { color: white; text-decoration: none; } </style>
   <style> .events-section-title h2 { font-size: 2rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #222; } .sponsors h3 { font-size: 1.2rem; margin-bottom: 15px; color: #333; } .partner-box { width: 70%; margin: 0 auto; transition: transform 0.3s ease; } .partner-box:hover { transform: scale(1.05); } .partner-logo { max-width: 100%; height: auto; border-radius: 10px; } .white-bg { background: #fff; padding: 12px; border-radius: 12px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); } /* Responsive Adjustments */ @media (max-width: 992px) { .partner-box { width: 80%; } } @media (max-width: 768px) { .events-section-title h2 { font-size: 1.6rem; } .sponsors h3 { font-size: 1.1rem; } .partner-box { width: 85%; } .navbar-brand>img{ width:230px!important; } } ul { list-style-type: revert!important; padding-left: 0; margin: 0; } ul ul { margin-bottom: 0; margin-left: 32px; } .tab-content>.active { display: block; line-height: 2; } 
   @media (min-width: 1200px) {
    .container {
        width: 1200px;
    }
}
   </style>
   <body>
      <!-- start page-wrapper --> 
      <div class="page-wrapper" id="home">
         <!-- start preloader --> 
         <div class="preloader">
            <div> <img src="/assets/logo.gif" alt> </div>
         </div>
         <!-- end preloader --> <!-- Start header --> 
         <header class="events-header">
            <nav class="navigation navbar navbar-default">
               <div class="container">
                  <div class="navbar-header"> <button type="button" class="open-btn"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="#"><img src="https://conference.fissionmonster.com/final_logo.png" alt class="img img-responsive" style="width: 200px;"></a> </div>
                  <div id="navbar" class="navbar-collapse collapse navbar-right">
                     <button class="close-navbar"><i class="fa fa-close"></i></button> 
                     <ul class="nav navbar-nav">
                        <li class="current"><a href="{{ route('home.page') }}#home">Home</a></li>
                        <li><a href="{{ route('home.page') }}#about">About</a></li>
                        <!--<li><a href="{{ route('home.page') }}#speakers">Speakers</a></li>-->
                        <li><a href="{{ route('home.page') }}#schedules">Schedules</a></li>
                        <li><a href="{{ route('home.page') }}#ticket">Register</a></li>
                        <li><a href="{{ route('quiz.page') }}">Student Competitions</a></li>
                        <li><a href="{{ route('home.page') }}#gallery">Gallery</a></li>
                        <li><a href="{{ route('home.page') }}#contact">Contact</a></li>
                     </ul>
                  </div>
                  <!-- end of nav-collapse --> 
               </div>
               <!-- end of container --> 
            </nav>
         </header>
         <!-- end of header --> <!-- start of hero --> 
         <section class="hero parallax events-hero" data-bg-image="/assets/images/events/hero-bg.jpg">
            <div class="hero-title">
               <span>Dec 26 - 28 . Expo Center, Lahore 2025</span> 
               <h1>Quiz Competition</h1>
            </div>
         </section>
         <!-- end of hero --> <!-- start events-about --> 
         <section class="about about-s2 section-padding" id="about">
            <div class="container">
               <div class="row section-title-s2">
                  <h2 style="text-align: justify;line-height: 1.5;">Student Competitions</h2>
               </div>
               <!-- end section-title --> 
               <div class="row">
                  <div class="col col-md-12">
                     <div class="about-content-wrapper">
                        <ul>
                           <li class="active"><a href="#overview" data-toggle="tab" aria-expanded="false">Overview</a></li>
                           <li class=""><a href="#poster" data-toggle="tab" aria-expanded="false">Guidelines for Poster Competition</a></li>
                           <li class=""><a href="#oral" data-toggle="tab" aria-expanded="false">Guidelines for Oral Presentations</a></li>
                           <li class=""><a href="#undergraduate" data-toggle="tab" aria-expanded="true">Guidelines for Undergraduate Table Clinic Presentations</a></li>
                           <li class=""><a href="#undergraduate_quiz" data-toggle="tab" aria-expanded="true">Guidelines for Undergraduate Quiz Competition</a></li>
                        </ul>
                        <!-- Tab panes --> 
                        <div class="tab-content about-content">
                           <div class="tab-pane fade active in" id="overview">
                              <h2 style="text-align: justify;">Themes for Competitions</h2>
                              <p style="text-align: justify;">&nbsp;</p>
                              <p style="text-align: justify;"><strong> All themes relevant to General Dental Practice and community oral healthcare</strong> starting from managing and working in a dental clinic to prevention, communication, diagnosis, management and follow up care both for adult and paediatric patients also encompassing emergencies, ethics, professionalism, and role of aesthetics and digital technology in delivering personalized human centered holistic oral healthcare.
                              <br/>
                              📆 Submission Deadline: 15th December
                              <br/>
                              📩 Submit via Email: saimachaudhry@iadsr.edu.pk</p>
                           </div>
                           <div class="tab-pane fade" id="poster">
                               <h2 style="text-align: justify;line-height: 1.5;"><span style="color: #000000;">Guidelines for Poster Competition</span></h2>
                              <h3><span style="color: #000000;">Eligibility and Registration</span></h3>
                              <ul>
                                 <li><span style="color: #000000;"><strong>Student Status:</strong> Participants must be currently enrolled as <strong>undergraduate or postgraduate dental students</strong> at a recognized institution.</span></li>
                                 <li><span style="color: #000000;"><strong>Abstract Acceptance:</strong> Participation in the poster competition is subject to the <strong>prior acceptance of a submitted abstract</strong>.</span></li>
                                 <li><span style="color: #000000;"><strong>Conference Registration:</strong> All presenting authors and team members must be <strong>registered for the conference</strong> by the specified deadline.</span></li>
                                 <li><span style="color: #000000;"><strong>Team Size:</strong> A team may comprise a <strong>maximum of 2-4 members</strong>.</span></li>
                                 <li><span style="color: #000000;"><strong>Poster Content:</strong> The poster must present recent trends in any area of dentistry. The posters based on research and those based on case reports are encouraged. Case reports should outline the unique features and special interest of the case.</span></li>
                              </ul>
                              <h3><span style="color: #000000;">Content and Structure</span></h3>
                              <p><span style="color: #000000;">The poster should be a visual presentation of your accepted abstract and include the following mandatory sections:</span></p>
                              <ul>
                                 <li><span style="color: #000000;"><strong>Title:</strong> Must be identical to the accepted abstract title.</span></li>
                                 <li><span style="color: #000000;"><strong>Authors &amp; Affiliation:</strong> Full names of all authors, their respective departments, faculty, and institution(s).</span></li>
                                 <li><span style="color: #000000;"><strong>Introduction/Background:</strong> A brief background followed by a clear statement of the <strong>problem</strong>.</span></li>
                                 <li><span style="color: #000000;"><strong>Methods:</strong> A concise discussion of the data sources, materials, techniques, data collection, and statistical methods used, whichever is applicable to the poster.</span></li>
                                 <li><span style="color: #000000;"><strong>Results:</strong> Clear presentation of the findings using <strong>easy-to-read tables and graphs</strong>.</span></li>
                                 <li><span style="color: #000000;"><strong>Conclusion:</strong> A summary of significance of the take home messages.</span></li>
                                 <li><span style="color: #000000;"><strong>Keywords:</strong> A short list (usually 3-6) of key terms.</span></li>
                                 <li><span style="color: #000000;"><strong>Main References:</strong> A brief list of primary sources (often using the <strong>Vancouver style</strong>).</span></li>
                              </ul>
                              <h3><span style="color: #000000;">Format and Design</span></h3>
                              <table width="588">
                                 <thead>
                                    <tr>
                                       <td width="142">
                                          <p><span style="color: #000000;"><strong>Aspect</strong></span></p>
                                       </td>
                                       <td width="446">
                                          <p><span style="color: #000000;"><strong>Recommendation/Standard</strong></span></p>
                                       </td>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td width="142">
                                          <p><span style="color: #000000;"><strong>Language</strong></span></p>
                                       </td>
                                       <td width="446">
                                          <p><span style="color: #000000;">Posters must be in <strong>English</strong>.</span></p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td width="142">
                                          <p><span style="color: #000000;"><strong>Dimensions</strong></span></p>
                                       </td>
                                       <td width="446">
                                          <p><span style="color: #000000;"><strong>Vertical/Portrait</strong> format (36 x 48 Inches)</span></p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td width="142">
                                          <p><span style="color: #000000;"><strong>Layout</strong></span></p>
                                       </td>
                                       <td width="446">
                                          <p><span style="color: #000000;">The material must be organized into logical sections with clear headings to guide the viewer.</span></p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td width="142">
                                          <p><span style="color: #000000;"><strong>Readability</strong></span></p>
                                       </td>
                                       <td width="446">
                                          <p><span style="color: #000000;"><strong>Font Size:</strong> Text must be clearly legible from a distance of at least 5-6 feet. Headings can be up to 40pt, and body text should not be less than 24pt.</span></p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td width="142">
                                          <p><span style="color: #000000;"><strong>Visuals</strong></span></p>
                                       </td>
                                       <td width="446">
                                          <p><span style="color: #000000;">Use high-resolution photographs, graphs, and charts. Avoid humorous or inappropriate pictures.</span></p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td width="142">
                                          <p><span style="color: #000000;"><strong>Word Count</strong></span></p>
                                       </td>
                                       <td width="446">
                                          <p><span style="color: #000000;">Keep text concise. A total word count of <strong>800-1000 words or less</strong> is ideal for a poster.</span></p>
                                       </td>
                                    </tr>
                                  
                                    <tr>
                                       <td width="142">
                                          <p><span style="color: #000000;"><strong>Printing</strong></span></p>
                                       </td>
                                       <td width="446">
                                          <p><span style="color: #000000;">The poster will be presented as e-poster. There is no need to print it.</span></p>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                              <h3><span style="color: #000000;">Presentation and Judging</span></h3>
                              <ul>
                                 <li><span style="color: #000000;"><strong>Display Time:</strong> The poster must be displayed on the assigned board for the duration specified by the organizers.</span></li>
                                 <li><span style="color: #000000;"><strong>Presentation Time:</strong> The presenting author is required to be present at their poster board within 7 minutes. .</span></li>
                                 <li><span style="color: #000000;"><strong>Knowledge:</strong> You must be knowledgeable in your subject and ready to defend your findings and methodology.</span></li>
                                 <li>
                                    <span style="color: #000000;"><strong>Judging Criteria:</strong> Judging is typically based on:<br /></span> 
                                    <ul>
                                       <li><span style="color: #000000;"><strong>Scientific Merit/Accuracy</strong> of the content.</span></li>
                                       <li><span style="color: #000000;"><strong>Originality and Relevance</strong> to dental science.</span></li>
                                       <li><span style="color: #000000;"><strong>Clarity and Organization</strong> of the poster layout.</span></li>
                                       <li><span style="color: #000000;"><strong>Quality of Discussion</strong> and response to judges' questions.</span></li>
                                    </ul>
                                 </li>
                                 <li><span style="color: #000000;"><strong>Decision:</strong> The decision of the judging panel will be</span> <strong>final</strong>.</li>
                              </ul>
                           </div>
                           <div class="tab-pane fade" id="oral">
                               <h2 style="text-align: justify;line-height: 1.5;"><span style="color: #000000;">Guidelines for Oral Presentations</span></h2>
                              <p><span style="color: #000000;">The Oral Presentations will be purely Research Based</span></p>
                              <h3><span style="color: #000000;">Eligibility and Registration</span></h3>
                              <ul>
                                 <li><span style="color: #000000;"><strong>Student Status:</strong> Participants must be currently enrolled as <strong>undergraduate or postgraduate dental students</strong> at a recognized institution.</span></li>
                                 <li><span style="color: #000000;"><strong>Abstract Acceptance:</strong> Participation in the poster competition is subject to the <strong>prior acceptance of a submitted abstract</strong>.</span></li>
                                 <li><span style="color: #000000;"><strong>Conference Registration:</strong> All presenting authors and team members must be <strong>registered for the conference</strong> by the specified deadline.</span></li>
                                 <li><span style="color: #000000;"><strong>Presenting Author:</strong> A research team may comprise of multiple members but there can be just on presenting author.</span></li>
                              </ul>
                              <p><span style="color: #000000;">&nbsp;</span></p>
                              <h3><span style="color: #000000;">Presentation Logistics</span></h3>
                              <table width="598">
                                 <thead>
                                    <tr>
                                       <td width="153">
                                          <p><span style="color: #000000;">Aspect</span></p>
                                       </td>
                                       <td width="445">
                                          <p><span style="color: #000000;">Standard Rule/Recommendation</span></p>
                                       </td>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td width="153">
                                          <p><span style="color: #000000;"><strong>Duration</strong></span></p>
                                       </td>
                                       <td width="445">
                                          <p><span style="color: #000000;">Typically <strong>7-8 minutes</strong> for presentation, followed by <strong>2-3 minutes</strong> for Q&amp;A from the judges/audience. <em>Strict adherence to time is mandatory.</em></span></p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td width="153">
                                          <p><span style="color: #000000;"><strong>Language</strong></span></p>
                                       </td>
                                       <td width="445">
                                          <p><span style="color: #000000;">The presentation must be delivered in <strong>English</strong>.</span></p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td width="153">
                                          <p><span style="color: #000000;"><strong>Format</strong></span></p>
                                       </td>
                                       <td width="445">
                                          <p><span style="color: #000000;">Use <strong>Microsoft PowerPoint (.pptx)</strong> format. <strong>Pre-uploading</strong> the presentation file is usually required before the session day.</span></p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td width="153">
                                          <p><span style="color: #000000;"><strong>Technical Setup</strong></span></p>
                                       </td>
                                       <td width="445">
                                          <p><span style="color: #000000;">The conference generally provides a <strong>laptop</strong>, LCD projector, and a <strong>lapel/lavalier microphone</strong>. <strong>Presenters are usually NOT allowed to use personal laptops</strong> to avoid technical delays.</span></p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td width="153">
                                          <p><span style="color: #000000;"><strong>Attendance</strong></span></p>
                                       </td>
                                       <td width="445">
                                          <p><span style="color: #000000;">The presenting author must be present in the session room <strong>at least 15 minutes before</strong> the session starts to check their slides and connect with the session chair.</span></p>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                              <h3><span style="color: #000000;">Slide Content and Structure</span></h3>
                              <p><span style="color: #000000;">The presentation should be a visual and oral delivery of your accepted abstract and is typically structured as follows:</span></p>
                              <ol>
                                 <li><span style="color: #000000;"><strong>Title Slide:</strong> Title of the study, full names of all authors, their respective departments, faculty, and institution(s). Include any required <strong>conflict-of-interest disclosures</strong> on this slide or a dedicated subsequent slide.</span></li>
                                 <li><span style="color: #000000;"><strong>Introduction/Background (1-2 slides):</strong> Briefly establish the clinical/scientific context and clearly state the <strong>research question, aim, or hypothesis</strong>.</span></li>
                                 <li><span style="color: #000000;"><strong>Materials and Methods (2-3 slides):</strong> Detail the study design, materials, participants/samples, data collection procedure, and statistical analysis used. Use simple diagrams or flowcharts if complex.</span></li>
                                 <li><span style="color: #000000;"><strong>Results (3-4 slides):</strong> This is the core of the presentation. Present your findings clearly using <strong>tables, graphs, and high-quality images</strong>. Do not simply display raw data; summarize the key outcomes.</span></li>
                                 <li><span style="color: #000000;"><strong>Discussion (1-2 slides):</strong> Interpret your results, compare them with previous literature, and discuss the <strong>clinical significance</strong> or impact of your findings.</span></li>
                                 <li><span style="color: #000000;"><strong>Conclusion (1 slide):</strong> A clear, concise statement summarizing the main finding and its relevance.</span></li>
                                 <li><span style="color: #000000;"><strong>Acknowledgments (1 slide):</strong> Thanking any research sponsors, funding bodies, faculty supervisors, or co-authors not listed.</span></li>
                                 <li><span style="color: #000000;"><strong>Q&amp;A Slide:</strong> A simple slide to conclude and invite questions.</span></li>
                              </ol>
                              <h3><span style="color: #000000;">Design and Readability</span></h3>
                              <table width="624">
                                 <thead>
                                    <tr>
                                       <td width="151">
                                          <p><span style="color: #000000;">Guideline</span></p>
                                       </td>
                                       <td width="473">
                                          <p><span style="color: #000000;">Detail</span></p>
                                       </td>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td width="151">
                                          <p><span style="color: #000000;"><strong>Font Size</strong></span></p>
                                       </td>
                                       <td width="473">
                                          <p><span style="color: #000000;">Use a <strong>large font size</strong> for visibility from the back of the room (e.g., minimum <strong>20-24 point</strong> for body text and 30+ for titles).</span></p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td width="151">
                                          <p><span style="color: #000000;"><strong>Slide Density</strong></span></p>
                                       </td>
                                       <td width="473">
                                          <p><span style="color: #000000;"><strong>Limit the number of slides</strong> (e.g., max 10-12 slides for a 10-minute presentation, aiming for about 1 minute per slide).</span></p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td width="151">
                                          <p><span style="color: #000000;"><strong>Text Usage</strong></span></p>
                                       </td>
                                       <td width="473">
                                          <p><span style="color: #000000;">Use <strong>bullet points</strong> and <strong>keywords</strong>; avoid long sentences or paragraphs. Limit to a maximum of <strong>5-6 bullet points</strong> per slide.</span></p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td width="151">
                                          <p><span style="color: #000000;"><strong>Visuals</strong></span></p>
                                       </td>
                                       <td width="473">
                                          <p><span style="color: #000000;">Use high-resolution, professional images and charts. Maintain a <strong>high contrast</strong> (e.g., dark text on a light/white background). Avoid using red/green together in graphs due to color blindness.</span></p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td width="151">
                                          <p><span style="color: #000000;"><strong>Consistency</strong></span></p>
                                       </td>
                                       <td width="473">
                                          <p><span style="color: #000000;">Maintain a <strong>consistent font style, size, and color scheme</strong> throughout the entire presentation.</span></p>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                              <h3><span style="color: #000000;">Presentation Delivery and Judging</span></h3>
                              <ul>
                                 <li><span style="color: #000000;"><strong>Practice and Timing:</strong> <strong>Rehearse your presentation</strong> multiple times to ensure you stay within the strict time limit. Practice speaking clearly, confidently, and at a steady, appropriate pace.</span></li>
                                 <li><span style="color: #000000;"><strong>Engagement:</strong> Maintain <strong>eye contact</strong> with the audience (and judges). Do not read directly from the screen or your notes. Use the laser pointer sparingly and strategically.</span></li>
                                 <li><span style="color: #000000;"><strong>Oratory Skill:</strong> Speak clearly, project your voice (the microphone is key), and use a professional, engaging tone. Avoid using filler words like "um" or "like."</span></li>
                                 <li><span style="color: #000000;"><strong>Q&amp;A Session:</strong> Listen carefully to the question. If you don't understand, politely ask for clarification or repetition. Answer truthfully and professionally. If you don't know the answer, politely state, "That is an excellent question that is beyond the scope of our current data, but we plan to investigate it in our future research."</span></li>
                                 <li>
                                    <span style="color: #000000;"><strong>Judging Criteria:</strong> Judges typically score based on:</span> 
                                    <ul>
                                       <li><span style="color: #000000;"><strong>Scientific Merit and Originality</strong> of the research.</span></li>
                                       <li><span style="color: #000000;"><strong>Clarity of Objectives and Methodology</strong>.</span></li>
                                       <li><span style="color: #000000;"><strong>Quality of Slides and Visual Aids</strong>.</span></li>
                                       <li><span style="color: #000000;"><strong>Clarity, Confidence, and Timing</strong> of the verbal presentation.</span></li>
                                       <li><span style="color: #000000;"><strong>Ability to Answer Questions</strong> and defend the research.</span></li>
                                    </ul>
                                 </li>
                              </ul>
                           </div>
                           <div class="tab-pane fade" id="undergraduate">
                              <h2 style="text-align: justify;"><span style="color: #000000;">Guidelines for Undergraduate Table Clinic Presentations</span></h2>
                              <h3 style="text-align: justify;"><span style="color: #000000;">Concept and Eligibility</span></h3>
                              <ul style="text-align: justify;">
                                 <li><span style="color: #000000;"><strong>Definition:</strong> A Table Clinic is a <strong>small, tabletop presentation</strong> that focuses on a <strong>specific, practical technique, case management concept, innovative idea, or research finding</strong>. It is highly visual, often involving models, instruments, equipment, or patient demonstrations (if allowed and pre-approved).</span></li>
                                 <li>
                                    <span style="color: #000000;"><strong>Eligibility:</strong></span> 
                                    <ul>
                                       <li><span style="color: #000000;">Participants must be currently enrolled <strong>undergraduate dental students</strong>.</span></li>
                                       <li><span style="color: #000000;">The clinic must be based on a topic relevant to modern dentistry.</span></li>
                                       <li><span style="color: #000000;">Prior <strong>acceptance of an abstract</strong> is mandatory.</span></li>
                                    </ul>
                                 </li>
                                 <li><span style="color: #000000;"><strong>Team Size:</strong> A maximum of <strong>three to four students</strong> should present the clinic at the table</span></li>
                              </ul>
                              <h3 style="text-align: justify;"><span style="color: #000000;">Time and Setup</span></h3>
                              <ul style="text-align: justify;">
                                 <li><span style="color: #000000;"><strong>Duration:</strong> The official presentation time slot is typically <strong>10 minutes</strong> for the clinic demonstration and interaction, with an additional <strong>5 minutes</strong> for transition/setup. The same clinic may be presented multiple times to different groups or judges throughout the session.</span></li>
                                 <li>
                                    <span style="color: #000000;"><strong>Equipment Provided:</strong> Organizers typically provide:</span> 
                                    <ul>
                                       <li><span style="color: #000000;">A <strong>standard tabletop</strong> with two chairs.</span></li>
                                       <li><span style="color: #000000;">A <strong>standard electrical outlet</strong>.</span></li>
                                    </ul>
                                 </li>
                                 <li><span style="color: #000000;"><strong>Setup Time:</strong> Students should arrive <strong>at least 30 minutes</strong> before the session begins to set up their clinics.</span></li>
                              </ul>
                              <h3 style="text-align: justify;"><span style="color: #000000;">Content and Materials</span></h3>
                              <ul style="text-align: justify;">
                                 <li><span style="color: #000000;"><strong>Focus:</strong> The clinic must focus on a <strong>clear, singular theme</strong>. It should not be a general review of a large topic.</span></li>
                                 <li>
                                    <span style="color: #000000;"><strong>Visual Aids:</strong> Visuals are crucial. Use a combination of:</span> 
                                    <ul>
                                       <li><span style="color: #000000;"><strong>Models:</strong> High-quality dental models, typodonts, or 3D prints to demonstrate techniques.</span></li>
                                       <li><span style="color: #000000;"><strong>Instruments/Materials:</strong> Actual instruments, supplies, or materials relevant to the technique being shown.</span></li>
                                       <li><span style="color: #000000;"><strong>Print Materials:</strong> A small, professionally designed <strong>backboard</strong> (similar to a mini-poster, usually 2 x 3 feet, to provide background and conclusions.</span></li>
                                       <li><span style="color: #000000;"><strong>Electronic Media:</strong> A laptop or tablet can be used to display slides, short video clips, or high-resolution clinical images. <em>Ensure all media is pre-loaded and tested.</em></span></li>
                                    </ul>
                                 </li>
                                 <li><span style="color: #000000;"><strong>Handouts (Optional):</strong> Small, one-page handouts summarizing the clinic's key takeaways, materials used, and author contact information are highly encouraged.</span></li>
                                 <li><span style="color: #000000;"><strong>Safety and Sterilization:</strong> If using actual instruments or simulating procedures, all materials must be <strong>clean, sterile, and safe</strong> for display. No sharp, contaminated, or biohazardous waste should be present.</span></li>
                              </ul>
                              <h3 style="text-align: justify;"><span style="color: #000000;">Presentation and Judging</span></h3>
                              <ul>
                                 <li style="text-align: justify;"><span style="color: #000000;"><strong>Interaction:</strong> The presenter must <strong>actively engage</strong> with the audience and judges. The presentation should be a dialogue, not a monologue.</span></li>
                                 <li style="text-align: justify;"><span style="color: #000000;"><strong>Clarity and Flow:</strong> The demonstration should be logical, concise, and easy for non-specialists to follow. <strong>Step-by-step clarity</strong> is essential.</span></li>
                                 <li>
                                    <span style="color: #000000;"><strong>Judging Criteria:</strong> Judges will assess the clinic based on:</span> 
                                    <ul>
                                       <li style="text-align: justify;"><span style="color: #000000;"><strong>Practical Relevance and Innovation:</strong> The clinical utility and originality of the technique or idea.</span></li>
                                       <li style="text-align: justify;"><span style="color: #000000;"><strong>Clarity of Demonstration:</strong> The ease with which the method is understood through materials and delivery.</span></li>
                                       <li style="text-align: justify;"><span style="color: #000000;"><strong>Visual Appeal and Quality of Materials:</strong> The professional quality and effectiveness of the models, diagrams, and display.</span></li>
                                       <li style="text-align: justify;"><span style="color: #000000;"><strong>Knowledge and Command of Subject:</strong> The presenter's ability to answer detailed questions accurately and confidently.</span></li>
                                    </ul>
                                 </li>
                              </ul>
                           </div>
                           <div class="tab-pane fade" id="undergraduate_quiz">
                              <h2 style="text-align: justify;"><span style="color: #000000;">Guidelines for Undergraduate Quiz Competition</span></h2>
                              <h3 style="text-align: justify;"><span style="color: #000000;">Eligibility and Team Structure</span></h3>
                              <ul style="text-align: justify;">
                                 <li><span style="color: #000000;"><strong>Eligibility:</strong> All participants must be currently enrolled <strong>undergraduate dental students</strong></span></li>
                                 <li>
                                    <span style="color: #000000;"><strong>Team Composition:</strong></span> 
                                    <ul>
                                       <li><span style="color: #000000;">Each team must consist of <strong>four (4) members</strong>.</span></li>
                                       <li><span style="color: #000000;">All four members must be from the <strong>same dental institution</strong>.</span></li>
                                       <li><span style="color: #000000;">No substitution of team members is allowed once the competition has begun.</span></li>
                                    </ul>
                                 </li>
                                 <li><span style="color: #000000;"><strong>Registration:</strong> Teams must register by the specified deadline. Maximum of two teams per institution will be allowed</span></li>
                                 <li><span style="color: #000000;"><strong>Designation:</strong> Each team must designate one member as the <strong>Team Captain</strong> before the start of the competition. The Captain is the only person authorized to submit final answers, challenge questions, or communicate with the Quiz Master.</span></li>
                              </ul>
                              <h3 style="text-align: justify;"><span style="color: #000000;">2. Competition Format and Rules</span></h3>
                              <p style="text-align: justify;"><span style="color: #000000;">The competition will typically be run in multiple rounds, such as a Preliminary/Written Round followed by a Final/Oral Stage.</span></p>
                              <h4 style="text-align: justify;"><span style="color: #000000;">A. Preliminary/Written Round (Elimination)</span></h4>
                              <ul style="text-align: justify;">
                                 <li><span style="color: #000000;"><strong>Objective:</strong> To select the top qualifying teams (6 teams) for the Final Stage.</span></li>
                                 <li><span style="color: #000000;"><strong>Format:</strong> All registered teams answer a common paper consisting of multiple-choice, fill-in-the-blank, or short-answer questions.</span></li>
                                 <li><span style="color: #000000;"><strong>Duration:</strong> 45 minutes.</span></li>
                                 <li><span style="color: #000000;"><strong>Procedure:</strong> Teams work together silently to complete the paper. No use of electronic devices, books, or notes is permitted.</span></li>
                                 <li><span style="color: #000000;"><strong>Scoring:</strong> Answers are checked by a panel. The top teams with the highest cumulative scores advance to the Final Stage.</span></li>
                              </ul>
                              <h4 style="text-align: justify;"><span style="color: #000000;">B. Final/Oral Stage</span></h4>
                              <p style="text-align: justify;"><span style="color: #000000;">The Final Stage will consist of multiple rounds, each with specific rules:</span></p>
                              <table width="624">
                                 <thead>
                                    <tr>
                                       <td width="208">
                                          <p><span style="color: #000000;">Round Type</span></p>
                                       </td>
                                       <td width="208">
                                          <p><span style="color: #000000;">Format &amp; Rules</span></p>
                                       </td>
                                       <td width="208">
                                          <p><span style="color: #000000;">Scoring</span></p>
                                       </td>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td width="208">
                                          <p><span style="color: #000000;"><strong>I. Rapid Fire/Starter</strong></span></p>
                                       </td>
                                       <td width="208">
                                          <p><span style="color: #000000;">Each team is asked a sequence of 5 questions. Teams are given 15-20 seconds per question. Only the Captain may speak the answer. No passing.</span></p>
                                       </td>
                                       <td width="208">
                                          <p><span style="color: #000000;"><strong>+10 points</strong> for correct answer. <strong>0 points</strong> for incorrect or unanswered.</span></p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td width="208">
                                          <p><span style="color: #000000;"><strong>II. Visual Round</strong></span></p>
                                       </td>
                                       <td width="208">
                                          <p><span style="color: #000000;">Questions based on displayed images, radiographs, clinical photos, or equipment. Teams write their answer on a provided sheet within 30 seconds.</span></p>
                                       </td>
                                       <td width="208">
                                          <p><span style="color: #000000;"><strong>+15 points</strong> for correct answer. <strong>-5 points</strong> for incorrect answer. <strong>0</strong> for no answer.</span></p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td width="208">
                                          <p><span style="color: #000000;"><strong>III. Buzzer Round</strong></span></p>
                                       </td>
                                       <td width="208">
                                          <p><span style="color: #000000;">Open questions asked to all teams. The first team to press their designated buzzer gets the chance to answer (must wait for the Quiz Master to acknowledge).</span></p>
                                       </td>
                                       <td width="208">
                                          <p><span style="color: #000000;"><strong>+20 points</strong> for correct answer. <strong>-10 points</strong> for incorrect answer (allows other teams to buzz in).</span></p>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td width="208">
                                          <p><span style="color: #000000;"><strong>IV. Case Study Round</strong></span></p>
                                       </td>
                                       <td width="208">
                                          <p><span style="color: #000000;">A detailed clinical case history is presented. Teams have 2-3 minutes to discuss, and the Captain presents the diagnosis or management plan.</span></p>
                                       </td>
                                       <td width="208">
                                          <p><span style="color: #000000;"><strong>+25 points</strong> for correct diagnosis/plan. Partial points may be awarded (up to \pm 10 ) at the judges' discretion.</span></p>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                              <h3 style="text-align: justify;"><span style="color: #000000;">3. Subject Areas</span></h3>
                              <p style="text-align: justify;"><span style="color: #000000;">Questions will be drawn from all core undergraduate dental subjects, including but not limited to:</span></p>
                              <ul style="text-align: justify;">
                                 <li><span style="color: #000000;">Anatomy, Physiology, Biochemistry, Microbiology, Pathology</span></li>
                                 <li><span style="color: #000000;">Oral Anatomy, Oral Pathology, Oral Medicine, Oral Surgery</span></li>
                                 <li><span style="color: #000000;">Operative Dentistry (Restorative), Endodontics</span></li>
                                 <li><span style="color: #000000;">Prosthodontics (Fixed and Removable)</span></li>
                                 <li><span style="color: #000000;">Orthodontics, Periodontics</span></li>
                                 <li><span style="color: #000000;">Pediatric Dentistry (Pedodontics)</span></li>
                                 <li><span style="color: #000000;">Community Dentistry and Public Health</span></li>
                                 <li><span style="color: #000000;">Dental Materials, Pharmacology</span></li>
                              </ul>
                              <h3 style="text-align: justify;"><span style="color: #000000;">4. Technical Rules</span></h3>
                              <ul style="text-align: justify;">
                                 <li><span style="color: #000000;"><strong>Electronic Devices:</strong> All mobile phones, smart watches, and other electronic communication/reference devices must be <strong>switched off and submitted</strong> to the invigilator during all rounds. Any violation leads to immediate disqualification.</span></li>
                                 <li><span style="color: #000000;"><strong>Protests/Challenges:</strong> Challenges to a question or answer must be raised immediately by the Team Captain <strong>before the next question is read</strong>. The decision of the Quiz Master and the panel of judges is <strong>FINAL</strong>.</span></li>
                                 <li><span style="color: #000000;"><strong>Unanswered Questions:</strong> If a team provides an incorrect answer in a buzzer round, the question will be passed to the next team that buzzes in.</span></li>
                                 <li><span style="color: #000000;"><strong>Tie-Breaker:</strong> In case of a tie for the top rank, a <strong>sudden-death buzzer round</strong> will be used until a clear win.</span></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end row --> 
            </div>
            <!-- end container --> 
         </section>
         <!-- end events-about --> <!-- start event-newsletter --> 
         <section class="event-newsletter section-padding">
            <h2 class="hidden">News letter</h2>
            <div class="container">
               <div class="row">
                  <div class="col col-md-8 col-md-offset-2">
                     <p>Subscribe to get the latest updates</p>
                     <form class="form">
                        <div> <input type="text" class="form-control" placeholder="Type your email" required> </div>
                        <div class="submit"> <button class="btn events-theme-btn-red">Subscribe</button> </div>
                     </form>
                  </div>
               </div>
               <!-- end row --> 
            </div>
            <!-- end container --> 
         </section>
         <!-- end event-newsletter --> <!-- start footer --> 
         <footer class="footer-style-two" id="contact">
            <div class="container">
               <div class="row">
                  <div class="col col-md-4 col-xs-6">
                     <div class="widget about-widget">
                        <div class="logo"><a href="#"><img src="/assets/images/events/sponsors/fm_logo.png" style="width: 200px;" alt="" class="img img-responsive"></a></div>
                        <p class="copyright">
                           2025 &copy; Design and Develop By 
                           <a href="https://fissionmonster.com">
                              Fission Monster
                        </p>
                        <ul class="social-links"> <li><a href="https://www.linkedin.com/company/fissionmonster/?originalSubdomain=pk"><i class="fa fa-linkedin"></i></a></li> <li><a href="https://www.facebook.com/fissionmonster"><i class="fa fa-facebook"></i></a></li> <li><a href="https://www.instagram.com/fissionmonster/"><i class="fa fa-instagram"></i></a></li> </ul> 
                     </div>
                  </div>
                  <div class="col col-md-4 col-xs-6">
                     <div class="widget contact-widget">
                        <h3>Contact</h3>
                        <ul>
                           <li><span>Email: </span>hello@fissionmonster.com</li>
                           <!--<li><span>Phone: </span>+92 3314547089</li>-->
                        </ul>
                     </div>
                  </div>
                  <div class="col col-md-4 col-xs-6">
                     <div class="widget site-map">
                        <h3>Site map</h3>
                        <ul>
                           <li><a  href="#home">Home</a></li>
                           <li><a  href="#about">Conference</a></li>
                           <li><a  href="{{ route('register.page') }}">Register Now</a></li>
                           <li><a href="https://iadsr.edu.pk/conference/">Our Portfolio</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <!-- end row --> 
            </div>
            <!-- end container --> 
         </footer>
         <!-- end footer --> 
      </div>
      <!-- end of page-wrapper --> <!-- All JavaScript files ================================================== --> <script src="/assets/js/jquery.min.js"></script> <script src="/assets/js/bootstrap.min.js"></script> <!-- Plugins for this template --> <script src="/assets/js/jquery-plugin-collection.js"></script> <!-- Google map api --> {{-- <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyC348vlw53nvT6C8LQ_dxkvsWDb9Kd2mEw"></script> --}} <!-- Custom script for this template --> <script src="/assets/js/script.js"></script> <script> document.addEventListener("DOMContentLoaded", function() { const successDiv = document.getElementById("registration-success"); if (successDiv) { successDiv.scrollIntoView({ behavior: "smooth", block: "center" }); successDiv.focus(); } }); $(function() { $("#navbar > ul > li > a:not(.dropdown-toggle)").on("click", function() { console.log('clicked', this.hostname, this.hash); window.location.href = "https://conference.fissionmonster.com/" + this.hash; }); }); </script> 
   </body>
</html>