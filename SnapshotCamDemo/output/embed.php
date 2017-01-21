        <style type="text/css">
		body { font-family: Helvetica, sans-serif; }
		h2, h3 { margin-top:0; }
		form { margin-top: 15px; }
		form input { margin-right: 15px; }
		#results { float:right; margin:20px; padding:20px; border:1px solid; background:#ccc; display: none}
	</style>
        
        <script language="JavaScript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script language="JavaScript" src="file_upload.js"></script>
            
	<div id="results">Your captured image will appear here...</div>
	
	<div id="my_camera"></div>
	
	<!-- First, include the Webcam.js JavaScript Library -->
	<script type="text/javascript" src="webcam.js"></script>
	
	<!-- Configure a few settings and attach camera -->
	<script language="JavaScript">
                Webcam.on( 'load', function() {
			console.log('<p><b>EVENT FIRED:</b> Library loaded.</p>');
		} );
		Webcam.on( 'live', function() {
			console.log('<p><b>EVENT FIRED:</b> Camera is live.</p>');
                        
                                    console.log('Webcam live');

                                    if(Webcam.isMovieFlash){
                                                document.getElementById('settings_button').style.display = 'block';
                                                document.getElementById('settings_button_flash').style.display = 'none';
                                    }else{
                                                document.getElementById('settings_button').style.display = 'none';
                                                document.getElementById('settings_button_flash').style.display = 'block';                        
                                    }

                                   if(SnapshotCamFile[0]['name'] == ""){
                                       init_snapshotcam(true,false,false,false);
                                   }else{
                                       previewFile();
                                   }
		} );
                
		Webcam.set({
			width: 320,
			height: 240,
			image_format: 'jpeg',
			jpeg_quality2: 90,
                        swfURL: 'Webcam.swf'
                });
                 
		Webcam.attach( '#my_camera' );
	</script>
            <div id="settings_button_flash" style="display:none; float: left;">
                        <img src="Settings.png" onMouseOver="this.style.cursor='pointer'" onClick="configure_cam();">
	    </div>
            <div id="settings_button" style="display:none; float: left;">
                        <img src="Settings.png" onMouseOver="this.style.cursor='pointer'" onClick="configure_cam();">
            </div>
            
            <style>
                .image-upload > input
                {
                    display: none;
                }
            </style>
            <div class="image-upload" id="image-upload" style="float: left;">
                <label for="UploadMovieFile">
                    <img src="file_upload_24.png"/>
                </label>

                <input id="UploadMovieFile" type="file" accept="image/*" onclick="value=''" onchange="previewFile()" />
            </div>
            
            <div style="padding-top: 3px">
                <div id="pre_saved_buttons" style="display:none">
                   <a href="#" class="rnr-button" id="RemovePrevSnapshot" onClick="remove_previous_snapshot()">Remove Snapshot</a>
		</div>
                <div id="pre_take_buttons" style="display:none">
                   <a href="#" class="rnr-button" id="TakeSnapshot" onClick="SnapshotCamFile[0]['name'] = '';init_snapshotcam(false,true,false,true)">Take Snapshot</a>
		</div>
		<div id="post_take_buttons" style="display:none">
            		<a href="#" class="rnr-button" id="CancelPreview" onClick="SnapshotCamFile[0]['name'] = '';init_snapshotcam(true,false,false,false)">&lt; Back</a>
			<a href="#" class="rnr-button" id="SavePhoto" onClick="save_photo()">Upload &gt;</a>
		</div>
            </div>
            <br/>
            <div id="config_html5_camera">
                <div class="select">
                    <div id="div_camera_config" style="display:none">

                        <div class="select" style="display:none">
                          <label for="audioSource">Microphone: </label><select id="audioSource"></select>
                        </div>

                        <div class="select">
                            <label for="videoSource">Video source: </label><select id="videoSource" onchange="start(true);"></select>
                        </div>

                        <div class="select" style="display:none">
                           <label for="audioOutput">Speakers: </label><select id="audioOutput"></select>
                        </div>
                        <br/>
                        <div>
                            <a href="#" class="rnr-button" id="SavePhoto" onclick="configure_cam();">SnapshotCam Configuration Close</a>
                        </div>
                      </div>
                </div>
            </div>
	<!-- Code to handle taking the snapshot and displaying it locally -->
	<script language="JavaScript">
                function configure_cam() {
                        if(!Webcam.isMovieFlash()){
                          if( document.getElementById('div_camera_config').style.display == 'none'){
                              document.getElementById('div_camera_config').style.display = 'block';
                          }else{
                              document.getElementById('div_camera_config').style.display = 'none';
                          }
                        }else{
                            Webcam.configure("camera");
                        }
                }
		
		function save_photo() {
                                SnapshotCamFile[0]['name'] = "";
                                
                                Webcam.uploadToServer();

                                // swap button sets
                                init_snapshotcam(false,false,true,false);
 		}
                
                function remove_previous_snapshot(){
                    if(pleasedeletefile == '')pleasedeletefile = SnapshotCamFile[0]['name'];
                    SnapshotCamFile[0]['name'] = "";//tony add code to remove file on server;
                    init_snapshotcam(true,false,false,false);
                }
                
                function init_snapshotcam(PreTakeSnapshot,PostTakeSnapshot,UploadedFile,RunFreeze){
                    // swap button sets
                    if(PreTakeSnapshot){
                        Webcam.unfreeze();
                        document.getElementById('pre_saved_buttons').style.display = 'none';
                        document.getElementById('pre_take_buttons').style.display = 'block';
                        document.getElementById('post_take_buttons').style.display = 'none';
                        document.getElementById('image-upload').style.display = 'block';
                        return;
                    }
                    if(PostTakeSnapshot){
                        if(RunFreeze)Webcam.freeze();
                        else Webcam.uploadFile();
                        document.getElementById('pre_saved_buttons').style.display = 'none';
                        document.getElementById('pre_take_buttons').style.display = 'none';
                        document.getElementById('post_take_buttons').style.display = 'block';                                    
                        document.getElementById('image-upload').style.display = 'none';
                        return;
                    }
                    if(UploadedFile){
                        if(RunFreeze)Webcam.freeze();
                        else Webcam.uploadFile();
                        document.getElementById('pre_saved_buttons').style.display = 'block';
                        document.getElementById('pre_take_buttons').style.display = 'none';
                        document.getElementById('post_take_buttons').style.display = 'none';
                        document.getElementById('image-upload').style.display = 'none';
                        return;
                    }    

                }
                
                var maxwait = 5000;
                var waitedfor = 0;
                    asdf();
                $(document).ready(function() {
                    console.log('document ready');
                    
                    function WaitWebcamLive() {
                        console.log(waitedfor);
                        waitedfor = waitedfor + 25;
                        if(waitedfor >= maxwait){
                           return true;
                        } 
                        // User submits form, we need their location...
                        if(Webcam.live==false) {
                            setTimeout(WaitWebcamLive, 25); // Try to submit form after timeout
                            return false;
                        } else {
                            return true;
                        }
                    }
                    setTimeout(WaitWebcamLive, 25);
                    
                });
                               
	</script>
