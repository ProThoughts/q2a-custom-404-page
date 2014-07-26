<?php

class qa_html_theme_layer extends qa_html_theme_base 
{

        function main()
        {
            if (($this->template==='not-found') && (qa_opt('pt_enable_html_404_message'))) 
			{
				$this->output('<div class="qa-main">');
				$this->output(qa_opt('pt_q2a_html_404_message_codebox'));
				$this->output('</div>');
            } 
			else
			{
                qa_html_theme_base::main();
			}
        }
}
/*
	Omit PHP closing tag to help avoid accidental output
*/