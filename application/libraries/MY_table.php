<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_table extends CI_Table{
	// add bootstrap
    protected function _default_template()
	{
		return array(
			'table_open'		=> '<table border="5" cellpadding="4" cellspacing="0" class="table table-striped">',

			'thead_open'		=> '<thead class="thead-dark">',
			'thead_close'		=> '</thead>',

			'heading_row_start'	=> '<tr>',
			'heading_row_end'	=> '</tr>',
			'heading_cell_start'	=> '<th>',
			'heading_cell_end'	=> '</th>',

			'tbody_open'		=> '<tbody>',
			'tbody_close'		=> '</tbody>',

			'row_start'		=> '<tr>',
			'row_end'		=> '</tr>',
			'cell_start'		=> '<td>',
			'cell_end'		=> '</td>',

			'row_alt_start'		=> '<tr>',
			'row_alt_end'		=> '</tr>',
			'cell_alt_start'	=> '<td>',
			'cell_alt_end'		=> '</td>',

			'table_close'		=> '</table>'
		);
	}
}

?>