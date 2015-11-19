<?php
class AdminPageFramework_FieldType_section_title extends AdminPageFramework_FieldType_text {
    public $aFieldTypeSlugs = array('section_title',);
    protected $aDefaultKeys = array('label_min_width' => 30, 'attributes' => array('size' => 20, 'maxlength' => 100,),);
    protected function getStyles() {
        return <<<CSSRULES
/* Section Tab Field Type */
.admin-page-framework-section-tab .admin-page-framework-field-section_title {
    padding: 0.5em;
}
 .admin-page-framework-section-tab .admin-page-framework-field-section_title .admin-page-framework-input-label-string {     
    vertical-align: middle; 
} 
 .admin-page-framework-section-tab .admin-page-framework-fields {
    display: inline-block;
} 
.admin-page-framework-field.admin-page-framework-field-section_title {
    float: none;
} 
.admin-page-framework-field.admin-page-framework-field-section_title input {
    background-color: #fff;
    color: #333;
    border-color: #ddd;
    box-shadow: inset 0 1px 2px rgba(0,0,0,.07);
    border-width: 1px;
    border-style: solid;
    outline: 0;
    box-sizing: border-box;
    vertical-align: middle;
}
CSSRULES;
        
    }
    protected function getField($aField) {
        $aField['attributes'] = array('type' => 'text') + $aField['attributes'];
        return parent::getField($aField);
    }
}