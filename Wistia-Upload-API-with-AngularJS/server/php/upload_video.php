<?php
$file_path = "http://localhost/nishant/";
$file_name = "small.mp4";
$project = "lc93g668sq" ;
$name = "demo";
$description = "despasd sad asd dsa dsa das";


    $API_KEY            = "3e3a4f719db6b0fc0e5c3900afdf684f32daacee2a77abf5adf890834acc67a9";
    $WISTIA_UPLOAD_URL  = "https://upload.wistia.com";

  
        $url = $WISTIA_UPLOAD_URL;

        $wistia = curl_init('https://upload.wistia.com');

        $params = array
        (
            'project_id'   => $project,
            'name'         => $name,
            'description'  => $description,
            'api_password' => $API_KEY,
            'file' => "@{'$file_path'};filename={'$file_name'};type={''}"
        );

        curl_setopt_array($wistia, array(
    CURLOPT_POST => TRUE,
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_POSTFIELDS => http_build_query($params)));

        //JSON result
        $result = curl_exec($wistia);

        //Object result
       echo json_decode($result);
?>
<form name="upload-form" method="POST" action="https://upload.wistia.com" enctype="multipart/form-data">
    <input type="file" name="files" value="small.mp4">
    <input type="hidden" name="api_password" value="3e3a4f719db6b0fc0e5c3900afdf684f32daacee2a77abf5adf890834acc67a9">
    <input type="text" name="name" value="">
    <input type="hidden" name="project_id" value="x1iwfieoge">
      <input type="submit" name="submit" value="Upload">
</form>

<script src="//fast.wistia.com/assets/external/api.js" async></script>
<link rel="stylesheet" href="//fast.wistia.com/assets/external/uploader.css" />
<div id="wistia_uploader" style="height:360px;width:640px;"></div>

<script src="//fast.wistia.com/assets/external/api.js" async></script>
<link rel="stylesheet" href="//fast.wistia.com/assets/external/uploader.css" />
<div id="wistia_uploader" style="height:360px;width:640px;"></div>
<script>
window._wapiq = window._wapiq || [];
_wapiq.push(function(W) {
  window.wistiaUploader = new W.Uploader({
    accessToken: "3e3a4f719db6b0fc0e5c3900afdf684f32daacee2a77abf5adf890834acc67a9",
    dropIn: "wistia_uploader",
    projectId: "lc93g668sq"
  });
});
</script>
