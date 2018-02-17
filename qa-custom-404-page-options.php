<?php

class pt_qa_custom_404_page 
{
	function allow_template($template)
	{
		return ($template!='admin');
	}

	function admin_form(&$qa_content)
	{

		$ok = null;
		if (qa_clicked('pt_q2a_custom_404_page_save_button')) 
		{
			qa_opt('pt_enable_html_404_message', (bool)qa_post_text('pt_enable_html_404_message'));
			qa_opt('pt_q2a_html_404_message_codebox', qa_post_text('pt_q2a_html_404_message_field'));
			qa_opt('pt_redirect_404_page_to_homepage', (bool)qa_post_text('pt_redirect_404_page_to_homepage'));            

			$ok = qa_lang('admin/options_saved');
		}
      
		qa_set_display_rules($qa_content, array(
				
			'pt_q2a_html_404_message_display' => 'pt_enable_html_404_message',
				
		));

		$fields = array();

		$fields[] = array(
			'label' => 'Enable Custom 404 Plugin',
			'type' => 'checkbox',
			'value' => qa_opt('pt_enable_html_404_message'),
			'tags' => 'NAME="pt_enable_html_404_message" ID="pt_enable_html_404_message"',
		);

		$fields[] = array(
			'label' => 'Redirect 404 Page to Homepage',
			'type' => 'checkbox',
			'value' => qa_opt('pt_redirect_404_page_to_homepage'),
			'tags' => 'NAME="pt_redirect_404_page_to_homepage" ID="pt_redirect_404_page_to_homepage"',
		);
		
		$fields[] = array(
			'id' => 'pt_q2a_html_404_message_display',
			'label' => 'Write custom 404 message in this box(HTML allowed) or Google Analytics code',
			'type' => 'textarea',
			'value' => qa_opt('pt_q2a_html_404_message_codebox'),
			'tags' => 'NAME="pt_q2a_html_404_message_field"',
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
				'tags' => 'NAME="pt_q2a_custom_404_page_save_button"',
				),
			),
		);
	}

}
/*
	Omit PHP closing tag to help avoid accidental output
*/
