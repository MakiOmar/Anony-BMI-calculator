<?php 

?>

<center>
<form onSubmit="return pregnancyCalc(this);">
	<table>
		<tr>
			<td>
				<pre>
				Last Menstrual Period:        <input type=text name=menstrual value="" size=10 maxlength=10>
				                              (MM/DD/YYYY format)

				Average Length of Cycles:     <input type=text name=cycle value="" size=3 maxlength=3> (22 to 45)
				                              (defaults to 28)

				Average Luteal Phase Length:  <input type=text name=luteal value="" size=3 maxlength=3> (9 to 16)
				                              (defaults to 14)

				<center><input type=submit value="Calculate!"></center>

				Estimated Conception:         <input type=text name=conception value="" size=20>
				Estimated Due Date:           <input type=text name=duedate value="" size=20>
				Estimated Fetal Age:          <input type=text name=fetalage value="" size=20>
				</pre>
			</td>
		</tr>
	</table>
</form>
</center>