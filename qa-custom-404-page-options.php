<?php

class qa_custom_404_page {

	function allow_template($template)
	{
		return ($template!='admin');
	}

	function option_default($option) {

		switch($option) {
  
            case 'q2a_enable_404_page':
                return true;

			default:
				return null;
		}	

	}
	
	function admin_form(&$qa_content)
	{

		$ok = null;
		if (qa_clicked('np_q_save_button')) {
			
			qa_opt('q2a_enable_404_page',(bool)qa_post_text('q2a_enable_404_page'));            
			qa_opt('enable_html_404_message',(bool)qa_post_text('enable_html_404_message'));
			qa_opt('q2a_html_404_message_codebox', qa_post_text('q2a_html_404_message_field'));            

			$ok = qa_lang('admin/options_saved');
		}
      
			qa_set_display_rules($qa_content, array(
				
				'q2a_html_404_message_display' => 'enable_html_404_message',
				
			));

		$fields = array();

		$fields[] = array(
			'label' => 'Enable 404 Page',
			'tags' => 'NAME="q2a_enable_404_page"',
			'value' => qa_opt('q2a_enable_404_page'),
			'type' => 'checkbox',
		);
        
		$fields[] = array(
			'label' => 'Custom 404 Message',
			'type' => 'checkbox',
			'value' => qa_opt('enable_html_404_message'),
			'tags' => 'NAME="enable_html_404_message" ID="enable_html_404_message"',
		);
		
		$fields[] = array(
			'id' => 'q2a_html_404_message_display',
			'label' => 'Write your 404 message in this box',
			'type' => 'textarea',
			'value' => qa_opt('q2a_html_404_message_codebox'),
			'tags' => 'NAME="q2a_html_404_message_field"',
            'rows' => 3,
		);
        

		$fields[] = array(
			'type' => 'blank',
		);


		return array(
			'ok' => ($ok && !isset($error)) ? $ok : null,
			
			'fields' => $fields,
			
			'buttons' => array(
				array(
				'label' => qa_lang_html('main/save_button'),
				'tags' => 'NAME="np_q_save_button"',
				),
			),
		);
	}

}
/*
	Omit PHP closing tag to help avoid accidental output
*/