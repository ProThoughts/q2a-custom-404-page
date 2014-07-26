<?php

class qa_html_theme_layer extends qa_html_theme_base 
{

        function main()
        {
            if ($this->template==='not-found') 
			{
                // output the content of your 404 page...
				if (qa_opt('pt_enable_html_404_message'))
				{
								$this->output('<div class="qa-main">');
								$this->output(qa_opt('pt_q2a_html_404_message_codebox'));
								$this->output('</div>');
				}
				else
				{
					$this->output('<div class="qa-main">
						<h1>
						</h1>
						<div class="qa-error">
							Page not found
						</div>
						<div class="qa-suggest-next">
							To see more, click for the <a href="./questions">full list of questions</a> or <a href="./tags">popular tags</a>.
						</div>
					</div>');
				}
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