<?php
  // Workshops forum
  $PHORUM['ForumId']=3;
  $PHORUM['ForumActive']='1';
  $PHORUM['ForumName']='Workshops';
  $PHORUM['ForumDescription']='anything and everything about workshop at Techfest 2002 goes here';
  $PHORUM['ForumConfigSuffix']='ws';
  $PHORUM['ForumFolder']='0';
  $PHORUM['ForumParent']='0';
  $PHORUM['ForumLang']='lang/english.php';
  $PHORUM['ForumDisplay']='30';
  $PHORUM['ForumTableName']='boardws';
  $PHORUM['ForumModeration']='n';
  $PHORUM['ForumSecurity']='0';
  $PHORUM['ForumEmailList']='';
  $PHORUM['ForumEmailReturnList']='';
  $PHORUM['ForumEmailTag']='';
  $PHORUM['ForumCheckDup']='1';
  $PHORUM['ForumMultiLevel']='2';
  $PHORUM['ForumCollapse']='0';
  $PHORUM['ForumFlat']='0';
  $PHORUM['ForumAllowHTML']='N';
  $PHORUM['ForumAllowUploads']='N';
  $PHORUM['ForumUploadTypes']='';
  $PHORUM['ForumUploadSize']='0';
  $PHORUM['ForumMaxUploads']='0';
  $PHORUM['ForumTableBodyColor2']=$PHORUM['default_table_body_color_2'];
  $PHORUM['ForumTableBodyFontColor2']=$PHORUM['default_table_body_font_color_2'];
  $PHORUM['ForumShowIP']='1';
  $PHORUM['ForumAllowEMailNotify']='0';
  $PHORUM['ForumBodyColor']=$PHORUM['default_body_color'];
  $PHORUM['ForumBodyLinkColor']=$PHORUM['default_body_link_color'];
  $PHORUM['ForumBodyALinkColor']=$PHORUM['default_body_alink_color'];
  $PHORUM['ForumBodyVLinkColor']=$PHORUM['default_body_vlink_color'];
  $PHORUM['ForumTableWidth']=$PHORUM['default_table_width'];
  $PHORUM['ForumTableHeaderColor']=$PHORUM['default_table_header_color'];
  $PHORUM['ForumTableHeaderFontColor']=$PHORUM['default_table_header_font_color'];
  $PHORUM['ForumTableBodyColor1']=$PHORUM['default_table_body_color_1'];
  $PHORUM['ForumTableBodyFontColor1']=$PHORUM['default_table_body_font_color_1'];
  $PHORUM['ForumNavColor']=$PHORUM['default_nav_color'];
  $PHORUM['ForumNavFontColor']=$PHORUM['default_nav_font_color'];

  // expand the array into vars for legacy code.
  while(list($key, $value)=each($PHORUM)){
    $$key=$PHORUM[$key];
  }

?>