<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Certificate of Participation</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&family=Poppins:wght@400;500;600&family=UnifrakturMaguntia&display=swap" rel="stylesheet">

<style>
  
  :root {
    --gold: #C29B4A; 
    --black: #1A1A1A;
  }

  body {
    background-color: #f0f0f0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
    font-family: 'Inter', sans-serif;
  }

  /* Main Certificate Container */
  .certificate-wrapper {
    width: 1150px;
    height: 790px;
    background-color: white;
    background-image: url('https://fissionmonster.com/certificate/BG.png'); 
    background-size: cover; 
    background-position: center;
    background-repeat: no-repeat;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    position: relative;
    overflow: hidden; 
  }

  .border-inner {
    width: 100%;
    height: 100%;
    position: relative;
  }

  /* --- Logos --- */
 .top-left-logo {
    position: absolute;
    top: 85px;
    left: 80px;
    width: 120px;
}

  .top-right-logo {
    position: absolute;
    top: 80px;
    right: 80px;
    width: 110px;
}
  /* --- Typography & Spacing --- */
  .title {
    font-family: 'UnifrakturMaguntia', serif; 
    font-size: 115px; 
    color: var(--gold);
    margin: 0;
    line-height: 1;
    font-weight: normal;
    position: absolute;
    top: 105px; 
    left: 50%;
    transform: translateX(-50%); 
  }

  .subtitle {
    font-size: 32px;
    color: var(--black);
    margin: 0;
    font-weight: 400;
    position: absolute;
     top: 220px;
    left: 50%;
    transform: translateX(-50%); 
  }

  .certify-text {
    font-size: 18px;
    color: var(--black);
    margin: 0;
    position: absolute;
    top: 265px; 
    left: 50%;
    transform: translateX(-50%); 
  }

  .student-name {
    font-family: 'Poppins', sans-serif;
    font-size: 28px;
    font-weight: 600;
    text-align: center;
    width: 500px;
    border-bottom: 2px solid #504949; /* Matching the darker grey border line */
    padding-bottom: 5px;
    color: var(--black);
    outline: none; 
    position: absolute;
    top: 310px; 
    left: 50%;
    transform: translateX(-50%); 
    min-height: 40px; 
  }

  .student-name:hover, .student-name:focus {
    background-color: rgba(0,0,0,0.02);
  }

  .attended-text {
    font-size: 17px;
    margin: 0;
    position: absolute;
    top: 385px; 
    left: 50%;
    transform: translateX(-50%); 
  }

  .conference-text {
    font-size: 40px;
    font-weight: 300;
    margin: 0;
    position: absolute;
    top: 415px; 
    left: 50%;
    transform: translateX(-50%); 
  }

  .organized-text {
    font-size: 17px;
    margin: 0;
    position: absolute;
    top: 475px; 
    left: 50%;
    transform: translateX(-50%); 
  }

  .organizers {
    font-family: 'Poppins', sans-serif;
    font-size: 32px; /* Slightly larger to match original */
    font-weight: 600;
    color: var(--gold);
    margin: 0;
    position: absolute;
    top: 500px; 
    left: 50%;
    transform: translateX(-50%); 
  }

  .cme-details {
    font-family: 'Poppins', sans-serif;
    font-size: 15px;
    font-weight: 500;
    text-align: center;
    line-height: 1.6;
    margin: 0;
    position: absolute;
    top: 549px; 
    left: 50%;
    transform: translateX(-50%); 
    width: 80%; 
  }

  /* --- Signatures Row --- */
  .signatures-container {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    width: 85%;
    position: absolute;
    bottom: 68px;
    left: 50%;
    transform: translateX(-50%);
    padding: 0;
}

  .signature-block {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 220px;
  }

  .signature-img1 {
    height: 60px; 
    object-fit: contain;
    margin-bottom: 5px;
  }
  .signature-img2 {
    height: 120px;
    object-fit: contain;
    margin-bottom: -35px;
}
  .signature-img3 {
    height: 130px;
    object-fit: contain;
    margin-bottom: -35px;
}
 .signature-img4 {
    height: 80px;
    object-fit: contain;
    margin-bottom: 0px;
}
  .signature-img1 {
    height: 70px; 
    object-fit: contain;
    margin-bottom: 5px;
  }

  .signature-line {
    width: 100%;
    border-top: 1px solid #504949;
    margin-bottom: 8px;
  }

  .signature-title {
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
    font-weight: 500;
    margin: 0;
  }

</style>
</head>
<body>

<div class="certificate-wrapper">
  <div class="border-inner">

    <img class="top-left-logo" src="https://fissionmonster.com/certificate/Iadsrlogo.png" alt="IADSR Logo" />
    <img class="top-right-logo" src="https://fissionmonster.com/certificate/Face logo.png" alt="Face Congress Logo" />

    <h1 class="title">Certificate</h1>
    <p class="subtitle">Of Participation</p>
    <p class="certify-text">This is to certify that</p>
    
    <div class="student-name">{{ $certificateData->prefix }} {{ $certificateData->name }} {{ $certificateData->father_name }}</div>
    
    <p class="attended-text">has attended</p>
    <h2 class="conference-text">Conference</h2>
    
    <p class="organized-text">Organized by</p>
    <h3 class="organizers">IADSR & FACE</h3>
    
    <p class="cme-details">
      This activity has been conferred 06 CME Hours<br>
      (PM&DC CME/CDE #53.Multidisciplinary)<br>
      16<sup>th</sup> May 2026 at Sheikh Zayed Hospital, Lahore, Pakistan.
    </p>

    <div class="signatures-container">
      <div class="signature-block">
        <img class="signature-img1" src="https://fissionmonster.com/certificate/DeanIADSR.png" alt="Dean Signature" />
        <div class="signature-line"></div>
        <p class="signature-title">Dean IADSR</p>
      </div>
      <div class="signature-block">
        <img class="signature-img2" src="https://fissionmonster.com/certificate/ConferenceSecretary.png" alt="Conference Secretary Signature" />
        <div class="signature-line"></div>
        <p class="signature-title">Conference Secretary</p>
      </div>
      <div class="signature-block">
        <img class="signature-img3" src="https://fissionmonster.com/certificate/DirectorFACE.png" alt="Director Face Signature" />
        <div class="signature-line"></div>
        <p class="signature-title">Director FACE</p>
      </div>
      <div class="signature-block">
        <img class="signature-img4" src="https://fissionmonster.com/certificate/DirectorIADSR.png" alt="Director IADSR Signature" />
        <div class="signature-line"></div>
        <p class="signature-title">Director IADSR</p>
      </div>
    </div>

  </div>
</div>

</body>
</html>