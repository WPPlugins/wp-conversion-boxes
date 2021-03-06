<?php
if(isset($wpcb_default_fields['heading_align'])){
    switch ($wpcb_default_fields['heading_align']) {
        case 'left': $heading_align_left = 'checked';
            break;
        case 'center': $heading_align_center = 'checked';
            break;
        case 'right': $heading_align_right = 'checked';
            break;
    }   
}

if(isset($wpcb_default_fields['content_align'])){
    switch ($wpcb_default_fields['content_align']) {
        case 'left': $content_align_left = 'checked';
            break;
        case 'center': $content_align_center = 'checked';
            break;
        case 'right': $content_align_right = 'checked';
            break;
    }
}

if(isset($wpcb_default_fields['button_align'])){
    switch ($wpcb_default_fields['button_align']) {
        case 'left': $button_align_left = 'checked';
            break;
        case 'center': $button_align_center = 'checked';
            break;
        case 'right': $button_align_right = 'checked';
            break;
    }
}
if(isset($wpcb_default_fields['button_type'])){
    switch ($wpcb_default_fields['button_type']) {
        case 'wpcb_button_gradient': $button_type_gradient = 'checked';
            break;
        case 'wpcb_button_3d': $button_type_3d = 'checked';
            break;
        case 'wpcb_button_flat': $button_type_flat = 'checked';
            break;
    }
}

if(isset($wpcb_default_fields['image_align'])){
    switch ($wpcb_default_fields['image_align']) {
        case 'left': $image_align_left = 'checked';
            break;
        case 'center': $image_align_center = 'checked';
            break;
        case 'right': $image_align_right = 'checked';
            break;
    }
}

if(isset($wpcb_default_fields['video_site'])){
    switch ($wpcb_default_fields['video_site']) {
        case 'youtube': $video_youtube = 'checked';
            break;
        case 'vimeo': $video_vimeo = 'checked';
            break;
    }
}

if(isset($wpcb_default_fields['video_align'])){
    switch ($wpcb_default_fields['video_align']) {
        case 'left': $video_align_left = 'checked';
            break;
        case 'center': $video_align_center = 'checked';
            break;
        case 'right': $video_align_right = 'checked';
            break;
    }
}

if(isset($wpcb_default_fields['input_remove_name_field']) && $wpcb_default_fields['input_remove_name_field'] == 1){
    $input_remove_name_field = "checked";
}
else{
    $input_remove_name_field = "";
}

?>

<?php if(isset($wpcb_default_fields['use_heading']) && $wpcb_default_fields['use_heading'] == true){ ?>

    <h2><?php _e('Heading Settings','wp-conversion-boxes'); ?></h2>

    <table class="form-table">
            <tbody>
                    <tr>
                            <th scope="row">
                                    <label for=""><?php _e('Heading text','wp-conversion-boxes'); ?></label>
                            </th>
                            <td>
                                    <input type="text" name="heading_text" id="heading_text" value="<?php echo $wpcb_default_fields['heading_text'] ?>" class="wpcb_fullwidth" >
                            </td>
                    </tr>
                    <tr>
                            <th scope="row">
                                    <label for=""><?php _e('Font family','wp-conversion-boxes'); ?></label>
                            </th>
                            <td>
                                    <?php $this->font_families_dropdown_list($wpcb_default_fields['heading_font_familiy'], 'heading'); ?>
                            </td>
                    </tr>
                    <tr>
                            <th scope="row"><label for=""><?php _e('Font size','wp-conversion-boxes'); ?></label>
                            </th>
                            <td>
                                <label><input type="text" name="heading_font_size" id="heading_font_size" value="<?php echo $wpcb_default_fields['heading_font_size'] ?>" class="wpcb_width50px"> <?php _e('(Eg. 16px or 1em)','wp-conversion-boxes'); ?></label>
                            </td>
                    </tr>
                    <tr>
                            <th scope="row"><label for=""><?php _e('Line Height','wp-conversion-boxes'); ?></label>
                            </th>
                            <td>
                                    <label><input type="text" name="heading_line_height" id="heading_line_height" value="<?php echo $wpcb_default_fields['heading_line_height'] ?>" class="wpcb_width50px"> <?php _e('(Eg. 16px or 1em)','wp-conversion-boxes'); ?></label>
                            </td>
                    </tr>
                    <tr>
                            <th scope="row"><label for=""><?php _e('Text Color','wp-conversion-boxes'); ?></label>
                            </th>
                            <td>
                                    <input type="text" name="heading_color" id="heading_color" value="<?php echo $wpcb_default_fields['heading_color'] ?>"  data-default-color="<?php echo $wpcb_default_fields['heading_color'] ?>">
                            </td>
                    </tr>
                    <tr>
                            <th scope="row"><label for=""><?php _e('Background Color','wp-conversion-boxes'); ?></label>
                            </th>
                            <td>
                                    <input type="text" name="heading_bg_color" id="heading_bg_color" value="<?php echo $wpcb_default_fields['heading_bg_color'] ?>" data-default-color="<?php echo $wpcb_default_fields['heading_bg_color'] ?>">
                            </td>
                    </tr>
                    <tr>
                            <th scope="row"><label for=""><?php _e('Text Align','wp-conversion-boxes'); ?></label>
                            </th>
                            <td>
                                    <label><input type='radio' name="heading_align" id="heading_align_l" class="heading_align" value="left" <?php echo (isset($heading_align_left)) ? $heading_align_left : '' ?>><?php _e('Left','wp-conversion-boxes'); ?></label>
                                    <label><input type='radio' name="heading_align" id="heading_align_c" class="heading_align" value="center" <?php echo (isset($heading_align_center)) ? $heading_align_center : '' ?>><?php _e('Center','wp-conversion-boxes'); ?></label>
                                    <label><input type='radio' name="heading_align" id="heading_align_r" class="heading_align" value="right" <?php echo (isset($heading_align_right)) ? $heading_align_right : '' ?>><?php _e('Right','wp-conversion-boxes'); ?></label>
                            </td>
                    </tr>
            </tbody>
    </table>
<hr />
<?php } ?>    
    
<?php if(isset($wpcb_default_fields['use_content']) && $wpcb_default_fields['use_content'] == true){ ?>
    
    <h2><?php _e('Content Settings','wp-conversion-boxes'); ?></h2>

    <table class="form-table">
            <tbody>
                    <tr>
                            <th scope="row"><label for=""><?php _e('Content','wp-conversion-boxes'); ?></label>
                            </th>
                            <td>
                                    <textarea name="content_text" id="content_text"><?php echo esc_attr ( $wpcb_default_fields['content_text'] ) ?></textarea>
                            </td>
                    </tr>
                    <tr>
                            <th scope="row"><label for=""><?php _e('Font family','wp-conversion-boxes'); ?></label>
                            </th>
                            <td>
                                    <?php $this->font_families_dropdown_list($wpcb_default_fields['content_font_familiy'], 'content'); ?>
                            </td>
                    </tr>
                    <tr>
                            <th scope="row"><label for=""><?php _e('Font size','wp-conversion-boxes'); ?></label>
                            </th>
                            <td>
                                    <label><input type="text" name="content_font_size" id="content_font_size" value="<?php echo $wpcb_default_fields['content_font_size'] ?>" class="wpcb_width50px"> <?php _e('(Eg. 16px or 1em)','wp-conversion-boxes'); ?></label>
                            </td>
                    </tr>
                    <tr>
                            <th scope="row"><label for=""><?php _e('Line Height','wp-conversion-boxes'); ?></label>
                            </th>
                            <td>
                                    <label><input type="text" name="content_line_height" id="content_line_height" value="<?php echo $wpcb_default_fields['content_line_height'] ?>" class="wpcb_width50px"> <?php _e('(Eg. 16px or 1em)','wp-conversion-boxes'); ?></label>
                            </td>
                    </tr>
                    <tr>
                            <th scope="row"><label for=""><?php _e('Text Color','wp-conversion-boxes'); ?></label>
                            </th>
                            <td>
                                    <input type="text" name="content_color" id="content_color" value="<?php echo $wpcb_default_fields['content_color'] ?>" data-default-color="<?php echo $wpcb_default_fields['content_color'] ?>">
                            </td>
                    </tr>
                    <tr>
                            <th scope="row"><label for=""><?php _e('Text Align','wp-conversion-boxes'); ?></label>
                            </th>
                            <td>
                                    <label><input type='radio' name="content_align" id="content_align_l" class="content_align" value="left" <?php echo (isset($content_align_left)) ? $content_align_left : '' ?>><?php _e('Left','wp-conversion-boxes'); ?></label>
                                    <label><input type='radio' name="content_align" id="content_align_c" class="content_align" value="center" <?php echo (isset($content_align_center)) ? $content_align_center : '' ?>><?php _e('Center','wp-conversion-boxes'); ?></label>
                                    <label><input type='radio' name="content_align" id="content_align_r" class="content_align" value="right" <?php echo (isset($content_align_right)) ? $content_align_right : '' ?>><?php _e('Right','wp-conversion-boxes'); ?></label>
                            </td>
                    </tr>
            </tbody>
    </table>
<hr />        
<?php } ?>   
    
<?php if(isset($wpcb_default_fields['use_input']) && $wpcb_default_fields['use_input'] == true){ ?>

    <h2><?php _e('Optin Form Settings','wp-conversion-boxes'); ?></h2>
    
    <table class="form-table">
            <tbody>
                    <tr>
                            <th scope="row">
                                <label for=""><?php _e('Select a List/Campaign','wp-conversion-boxes'); ?></label>
                            </th>
                            <td>
                                <?php $this->get_mailer_campaigns_list($wpcb_default_fields['input_mailer_id'],$wpcb_default_fields['input_campaign_name']); ?>
                                <p class="wpcb_help_block"><?php _e("Select a campaign/list to which you want to add the leads generated by this box.",'wp-conversion-boxes'); ?></p>
                            </td>
                    </tr>
                    <tr class="opaque6">
                            <th scope="row">
                                <label for=""><?php _e('After Optin Redirect To ','wp-conversion-boxes'); echo $wpcb_upgrade_message; ?></label>
                            </th>
                            <td>
                                <input placeholder="http://" type="text" name="input_redirect_url" id="input_redirect_url" value="" class="wpcb_fullwidth" disabled />
                                <p class="wpcb_help_block"><?php _e("Enter a link where you want to redirect users after successful optin. Leave empty if you want users to stay on same page.",'wp-conversion-boxes'); ?></p>
                            </td>
                    </tr>
                    <tr>
                            <th scope="row">
                                <label for=""><?php _e('Input Text Size','wp-conversion-boxes'); ?></label>
                            </th>
                            <td>
                                <label><input type="text" name="input_text_size" id="input_text_size" value="<?php echo $wpcb_default_fields['input_text_size'] ?>" class="wpcb_width50px"> <?php _e('(Eg. 150px)','wp-conversion-boxes'); ?></label>
                            </td>
                    </tr>
                    <tr>
                            <th scope="row"><label for=""><?php _e('Input Text Color','wp-conversion-boxes'); ?></label>
                            </th>
                            <td>
                                    <input type="text" name="input_text_color" id="input_text_color" value="<?php echo $wpcb_default_fields['input_text_color'] ?>" data-default-color="<?php echo $wpcb_default_fields['input_text_color'] ?>">
                            </td>
                    </tr>       
                    <tr>
                            <th scope="row"><label for=""><?php _e('Input font family','wp-conversion-boxes'); ?></label>
                            </th>
                            <td>
                                    <?php $this->font_families_dropdown_list($wpcb_default_fields['input_font_family'], 'input'); ?>
                            </td>
                    </tr>
                    <tr>
                            <th scope="row"><label for=""><?php _e('Remove Name Field','wp-conversion-boxes'); ?></label>
                            </th>
                            <td>
                                    <label><input type="checkbox" name="input_remove_name_field" id="input_remove_name_field" <?php echo $input_remove_name_field; ?>> Remove Name Field</label>
                                    <p class="wpcb_help_block"><?php _e("This will remove the Name field from the box and only Email field will be shown.",'wp-conversion-boxes'); ?></p>
                            </td>
                    </tr>
                    <tr>
                            <th scope="row"><label for=""><?php _e('Name Field Placeholder','wp-conversion-boxes'); ?></label>
                            </th>
                            <td>
                                    <input type="text" name="input_name_placeholder" id="input_name_placeholder" value="<?php echo $wpcb_default_fields['input_name_placeholder'] ?>" class="wpcb_fullwidth">
                            </td>
                    </tr>                    
                    <tr>
                            <th scope="row"><label for=""><?php _e('Email Field Placeholder','wp-conversion-boxes'); ?></label>
                            </th>
                            <td>
                                    <input type="text" name="input_email_placeholder" id="input_email_placeholder" value="<?php echo $wpcb_default_fields['input_email_placeholder'] ?>" class="wpcb_fullwidth">
                            </td>
                    </tr> 
                    <tr>
                            <th scope="row"><label for=""><?php _e('Email Field Width','wp-conversion-boxes'); ?></label>
                            </th>
                            <td>
                                    <label><input type="text" name="input_width" id="input_width" value="<?php echo $wpcb_default_fields['input_width'] ?>" class="wpcb_width50px"> <?php _e('(Eg. 200px or 80%)','wp-conversion-boxes'); ?></label>
                            </td>
                    </tr>
                    <!-- This is some weird coding. Please bear with me. -->
                    <tr>
                            <th scope="row"><label for=""><?php _e('Optin Form Align','wp-conversion-boxes'); ?></label>
                            </th>
                            <td>
                                    <label><input type='radio' name="button_align" id="button_align_l" class="button_align" value="left" <?php echo (isset($button_align_left)) ? $button_align_left : '' ?>><?php _e('Left','wp-conversion-boxes'); ?></label>
                                    <label><input type='radio' name="button_align" id="button_align_c" class="button_align" value="center" <?php echo (isset($button_align_center)) ? $button_align_center : '' ?>><?php _e('Center','wp-conversion-boxes'); ?></label>
                                    <label><input type='radio' name="button_align" id="button_align_r" class="button_align" value="right" <?php echo (isset($button_align_right)) ? $button_align_right : '' ?>><?php _e('Right','wp-conversion-boxes'); ?></label>
			</td>
                    </tr>                  
            </tbody>
    </table>
<hr />      

<?php } ?>    
    

<h2><?php _e('Button Settings','wp-conversion-boxes'); ?></h2>    

<table class="form-table">
	<tbody>
		<tr>
			<th scope="row"><label for=""><?php _e('Button text','wp-conversion-boxes'); ?></label>
			</th>
			<td>
				<input type="text" name="button_text" id="button_text" value="<?php echo $wpcb_default_fields['button_text'] ?>">
			</td>
		</tr>
                <?php if(!isset($wpcb_default_fields['use_input']) || $wpcb_default_fields['use_input'] != true) { ?>
                    <tr>
                            <th scope="row"><label for=""><?php _e('Button link (http://)','wp-conversion-boxes'); ?></label>
                            </th>
                            <td>
                                    <input type="text" name="button_link" id="button_link" class="wpcb_fullwidth" placeholder="http://" value="<?php echo $wpcb_default_fields['button_link'] ?>">
                            </td>
                    </tr>
                    <tr>
                            <th scope="row"><label for=""><?php _e('Open link in new tab','wp-conversion-boxes'); ?></label>
                            </th>
                            <td>
                                    <label for="button_target_blank"><input type="checkbox" name="button_target_blank" id="button_target_blank" value="1" <?php echo ($wpcb_default_fields['button_target_blank'] != 'false') ? 'checked' : ''; ?>/><?php _e('Open in new tab','wp-conversion-boxes'); ?></label>
                            </td>
                    </tr>
                <?php } ?>
		<tr>
			<th scope="row"><label for=""><?php _e('Button Font Family','wp-conversion-boxes'); ?></label>
			</th>
			<td>
				<?php $this->font_families_dropdown_list($wpcb_default_fields['button_text_font_familiy'], 'button'); ?>
			</td>
		</tr>
		<tr>
			<th scope="row"><label for=""><?php _e('Button Font Size','wp-conversion-boxes'); ?></label>
			</th>
			<td>
                                <label><input type="text" name="button_text_font_size" id="button_text_font_size" value="<?php echo $wpcb_default_fields['button_text_font_size'] ?>" class="wpcb_width50px"> <?php _e('(Eg. 16px or 1em)','wp-conversion-boxes'); ?></label>
			</td>
		</tr>
		<tr>
			<th scope="row"><label for=""><?php _e('Button Width','wp-conversion-boxes-pro'); ?></label>
			</th>
			<td>
                                <label><input type="text" name="button_width" id="button_width" value="<?php echo $wpcb_default_fields['button_width'] ?>" class="wpcb_width50px"> <?php _e('(Eg. 150px or 100%)','wp-conversion-boxes-pro'); ?></label>
			</td>
		</tr>
		<tr>
			<th scope="row"><label for=""><?php _e('Button Text Color','wp-conversion-boxes'); ?></label>
			</th>
			<td>
				<input type="text" name="button_text_color" id="button_text_color" value="<?php echo $wpcb_default_fields['button_text_color'] ?>" data-default-color="<?php echo $wpcb_default_fields['button_text_color'] ?>">
			</td>
		</tr>
		<tr>
			<th scope="row"><label for=""><?php _e('Button Background Color','wp-conversion-boxes'); ?></label>
			</th>
			<td>
				<input type="text" name="button_bg_color" id="button_bg_color" value="<?php echo $wpcb_default_fields['button_bg_color'] ?>"  data-default-color="<?php echo $wpcb_default_fields['button_bg_color'] ?>">
			</td>
		</tr>
		<tr>
			<th scope="row"><label for=""><?php _e('Button Type','wp-conversion-boxes'); ?></label>
			</th>
			<td>
				<label><input type='radio' name="button_type" id="button_type_1" class="button_type" value="wpcb_button_gradient" <?php echo (isset($button_type_gradient)) ? $button_type_gradient : '' ?>><?php _e('Gradient','wp-conversion-boxes'); ?></label>
				<label><input type='radio' name="button_type" id="button_type_2" class="button_type" value="wpcb_button_3d" <?php echo (isset($button_type_3d)) ? $button_type_3d : '' ?>><?php _e('3D','wp-conversion-boxes'); ?></label>
				<label><input type='radio' name="button_type" id="button_type_3" class="button_type" value="wpcb_button_flat" <?php echo (isset($button_type_flat)) ? $button_type_flat : '' ?>><?php _e('Flat','wp-conversion-boxes'); ?></label>
			</td>
		</tr>
		<tr>
			<th scope="row"><label for=""><?php _e('Button Border Radius','wp-conversion-boxes'); ?></label>
			</th>
			<td>
				<input type="text" name="button_border_radius" id="button_border_radius" value="<?php echo $wpcb_default_fields['button_border_radius'] ?>" class="wpcb_width50px">
			</td>
		</tr>
                <?php 
                    // This part of code is tricky. Please don't try to understand it. 
                    if(!isset($wpcb_default_fields['use_input']) || $wpcb_default_fields['use_input'] != true){
                ?>
		<tr>
			<th scope="row"><label for=""><?php _e('Button Align','wp-conversion-boxes'); ?></label>
			</th>
			<td>
				<label><input type='radio' name="button_align" id="button_align_l" class="button_align" value="left" <?php echo (isset($button_align_left)) ? $button_align_left : '' ?>><?php _e('Left','wp-conversion-boxes'); ?></label>
				<label><input type='radio' name="button_align" id="button_align_c" class="button_align" value="center" <?php echo (isset($button_align_center)) ? $button_align_center : ''  ?>><?php _e('Center','wp-conversion-boxes'); ?></label>
				<label><input type='radio' name="button_align" id="button_align_r" class="button_align" value="right" <?php echo (isset($button_align_right)) ? $button_align_right : ''  ?>><?php _e('Right','wp-conversion-boxes'); ?></label>
			</td>
		</tr>
                <?php } ?>
	</tbody>
</table>
<hr />    
<?php if(isset($wpcb_default_fields['use_image']) && $wpcb_default_fields['use_image'] == true){ ?>

    <h2><?php _e('Image Settings','wp-conversion-boxes'); ?></h2>    

    <table class="form-table">
            <tbody>
                    <tr>
                            <th scope="row">
                                <label for=""><?php _e('Image URL','wp-conversion-boxes'); ?></label>
                            </th>
                            <td>
                                <input id="image_url" type="text" name="image_url" placeholder="http://" value="<?php echo $wpcb_default_fields['image_url'];?>" /> 
                                <input id="wpcb_img_upload" align="right" class="button" type="button" value="<?php _e('Upload Image','wp-conversion-boxes'); ?>" />
                            </td>
                    </tr>
                    <tr>
                            <th scope="row"><label for=""><?php _e('Image Width','wp-conversion-boxes'); ?></label>
                            </th>
                            <td>
                                    <label><input type="text" name="image_width" id="image_width" value="<?php echo $wpcb_default_fields['image_width'] ?>" class="wpcb_width50px"> <?php _e('(Eg. 200px or 80%)','wp-conversion-boxes'); ?></label>
                            </td>
                    </tr>                    
                    <tr>
                            <th scope="row"><label for=""><?php _e('Image Height','wp-conversion-boxes'); ?></label>
                            </th>
                            <td>
                                    <label><input type="text" name="image_height" id="image_height" value="<?php echo $wpcb_default_fields['image_height'] ?>" class="wpcb_width50px"> <?php _e('(Eg. 200px)','wp-conversion-boxes'); ?></label>
                            </td>
                    </tr>                    
                    <tr>
                            <th scope="row"><label for=""><?php _e('Image Position','wp-conversion-boxes'); ?></label>
                            </th>
                            <td>
                                    <label><input type='radio' name="image_align" id="image_align_l" class="image_align" value="left" <?php echo (isset($image_align_left)) ? $image_align_left : '' ?>><?php _e('Left','wp-conversion-boxes'); ?></label>
                                    <label><input type='radio' name="image_align" id="image_align_c" class="image_align" value="center" <?php echo (isset($image_align_center)) ? $image_align_center : '' ?>><?php _e('Center','wp-conversion-boxes'); ?></label>
                                    <label><input type='radio' name="image_align" id="image_align_r" class="image_align" value="right" <?php echo (isset($image_align_right)) ? $image_align_right : '' ?>><?php _e('Right','wp-conversion-boxes'); ?></label>
                            </td>
                    </tr>                    
            </tbody>
    </table>
<hr />            

<?php } ?>
   
<?php if(isset($wpcb_default_fields['use_video']) && $wpcb_default_fields['use_video'] == true){ ?>

    <h2><?php _e('Video Settings','wp-conversion-boxes'); ?></h2>    

    <table class="form-table">
            <tbody>
                    <tr>
                            <th scope="row">
                                <label for=""><?php _e('Video Hosted At','wp-conversion-boxes'); ?></label>
                            </th>
                            <td>
                                <label><input type='radio' name="video_site" id="video_site_youtube" class="video_site" value="youtube" <?php echo (isset($video_youtube)) ? $video_youtube : '' ?>><?php _e('Youtube','wp-conversion-boxes'); ?></label>
                                <label><input type='radio' name="video_site" id="video_site_vimeo" class="video_site" value="vimeo" <?php echo (isset($video_vimeo)) ? $video_vimeo : '' ?>><?php _e('Vimeo','wp-conversion-boxes'); ?></label>
                            </td>
                    </tr>                
                    <tr>
                            <th scope="row">
                                <label for=""><?php _e('Video URL','wp-conversion-boxes'); ?></label>
                            </th>
                            <td>
                                <label for="video_id" id="video_id_label"></label><input id="video_id" type="text" name="video_id" placeholder="Video id..." value="<?php echo $wpcb_default_fields['video_id'] ?>" />
                            </td>
                    </tr>
                    <tr>
                            <th scope="row"><label for=""><?php _e('Video Width','wp-conversion-boxes'); ?></label>
                            </th>
                            <td>
                                    <label><input type="text" name="video_width" id="video_width" value="<?php echo $wpcb_default_fields['video_width'] ?>" class="wpcb_width50px"> <?php _e('(Eg. 200px or 80%)','wp-conversion-boxes'); ?></label>
                            </td>
                    </tr>                    
                    <tr>
                            <th scope="row"><label for=""><?php _e('Video Height','wp-conversion-boxes'); ?></label>
                            </th>
                            <td>
                                    <label><input type="text" name="video_height" id="video_height" value="<?php echo $wpcb_default_fields['video_height'] ?>" class="wpcb_width50px"> <?php _e('(Eg. 200px)','wp-conversion-boxes'); ?></label>
                            </td>
                    </tr>                    
                    <tr>
                            <th scope="row"><label for=""><?php _e('Video Position','wp-conversion-boxes'); ?></label>
                            </th>
                            <td>
                                    <label><input type='radio' name="video_align" id="video_align_l" class="video_align" value="left" <?php echo (isset($video_align_left)) ? $video_align_left : '' ?>><?php _e('Left','wp-conversion-boxes'); ?></label>
                                    <label><input type='radio' name="video_align" id="video_align_c" class="video_align" value="center" <?php echo (isset($video_align_center)) ? $video_align_center : '' ?>><?php _e('Center','wp-conversion-boxes'); ?></label>
                                    <label><input type='radio' name="video_align" id="video_align_r" class="video_align" value="right" <?php echo (isset($video_align_right)) ? $video_align_right : '' ?>><?php _e('Right','wp-conversion-boxes'); ?></label>
                            </td>
                    </tr>                    
            </tbody>
    </table>
<hr />            

<?php } ?>
    
<h2><?php _e('Box Container Settings','wp-conversion-boxes'); ?></h2>    

<table class="form-table">
	<tbody>
		<tr>
			<th scope="row"><label for=""><?php _e('Box Size','wp-conversion-boxes'); ?></label>
			</th>
			<td>
				<label for="box_container_width"><input type="text" name="box_container_width" id="box_container_width" value="<?php echo $wpcb_default_fields['box_container_width'] ?>" class="wpcb_width50px"><?php _e('Width (Eg. 200px or 80%)','wp-conversion-boxes'); ?></label>
				<label for="box_container_height"><input type="text" name="box_container_height" id="box_container_height" value="<?php echo $wpcb_default_fields['box_container_height'] ?>" class="wpcb_width50px"><?php _e('Height (only in px)','wp-conversion-boxes'); ?></label>
			</td>
		</tr>
		<tr>
			<th scope="row"><label for=""><?php _e('Box Background Color','wp-conversion-boxes'); ?></label>
			</th>
			<td>
				<input type="text" name="box_container_bg_color" id="box_container_bg_color" value="<?php echo $wpcb_default_fields['box_container_bg_color'] ?>" data-default-color="<?php echo $wpcb_default_fields['box_container_bg_color'] ?>">
			</td>
		</tr>
		<tr>
			<th scope="row"><label for=""><?php _e('Spacing around the box container','wp-conversion-boxes'); ?></label>
			</th>
			<td>
				<label for="box_container_top"><input type="text" name="box_container_top" id="box_container_top" value="<?php echo $wpcb_default_fields['box_container_margin_top'] ?>" class="wpcb_width50px"> <?php _e('Top (Eg. 20px)','wp-conversion-boxes'); ?></label>
				<label for="box_container_bottom"><input type="text" name="box_container_bottom" id="box_container_bottom" value="<?php echo $wpcb_default_fields['box_container_margin_bottom'] ?>" class="wpcb_width50px"> <?php _e('Bottom (Eg. 20px)','wp-conversion-boxes'); ?></label><br />
				<label for="box_container_left"><input type="text" name="box_container_left" id="box_container_left" value="<?php echo $wpcb_default_fields['box_container_margin_left'] ?>" class="wpcb_width50px"> <?php _e('Left (Eg. 20px)','wp-conversion-boxes'); ?></label>
				<label for="box_container_right"><input type="text" name="box_container_right" id="box_container_right" value="<?php echo $wpcb_default_fields['box_container_margin_right'] ?>" class="wpcb_width50px"> <?php _e('Right (Eg. 20px)','wp-conversion-boxes'); ?></label>
			</td>
		</tr>
		<tr>
			<th scope="row"><label for=""><?php _e('Box container border','wp-conversion-boxes'); ?></label>
			</th>
			<td>
                <input type="text" name="box_container_border_color" id="box_container_border_color" data-default-color="<?php echo $wpcb_default_fields['box_container_border_color'] ?>" value="<?php echo $wpcb_default_fields['box_container_border_color'] ?>" class="wpcb_width50px"><label for="box_container_border_color"><?php _e('Border Color','wp-conversion-boxes'); ?></label><br />
				<label for="box_container_border_width"><input type="text" name="box_container_border_width" id="box_container_border_width" value="<?php echo $wpcb_default_fields['box_container_border_width'] ?>" class="wpcb_width50px"> <?php _e('Border Size (Eg. 2px)','wp-conversion-boxes'); ?></label>
			</td>
		</tr>
	</tbody>
</table>

<hr />

<h2><?php _e('Custom CSS','wp-conversion-boxes-pro'); ?></h2>    

<table class="form-table">
	<tbody>
		<tr>
			<th scope="row"><label for=""><?php _e('Add Your Custom CSS','wp-conversion-boxes-pro'); ?></label>
			</th>
			<td>
                            <textarea class="wpcb_fullwidth" name="custom_css" id="custom_css"><?php echo (isset($wpcb_default_fields['custom_css'])) ? esc_textarea ( $wpcb_default_fields['custom_css'] ) : ''; ?></textarea>
                            <p class="wpcb_help_block">Can't find options to customize some elements above? Use this area to add your custom CSS for any box element. Now you have total control over box design! <b>NOTE:</b> Do not include <code>&lt;style&gt;...&lt;/style&gt;</code> tags.</p>
			</td>
		</tr>
	</tbody>
</table>