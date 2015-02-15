<?php

/*
algorithm adapted from Koha's ClassSortRoutine
https://github.com/colinsc/koha/blob/master/C4/ClassSortRoutine/LCC.pm and Generic.pm
distributed under GPL 3.0, a copy of which is in this project's root directory


Generates sorting key using the following rules:
* Concatenates class and item part.
* Removes leading and trailing whitespace.
* Converts each run of whitespace to an underscore.
* Converts to upper-case and removes non-alphabetical, non-numeric, non-underscore characters.
=cut

sub get_class_sort_key {
    my ($cn_class, $cn_item) = @_;

    $cn_class = '' unless defined $cn_class;
    $cn_item  = '' unless defined $cn_item;
    my $key = uc "$cn_class $cn_item";
    $key =~ s/^\s+//;
    $key =~ s/\s+$//;
    $key =~ s/\s+/_/g;
    $key =~ s/[^\p{IsAlnum}_]//g;
    return $key;

}

*/

		$callNum = 'Ps/3602.   O65745 c45 20?10';

	function sortNums($callNum){
		//concatenate class and item part

		//remove leading and trailing whitespace

		//convert each run of whitespace to an underscore


		//convert to upper-case and remove non-alpha, non-numeric, non-underscore characters



		
		//make all characters uppercase
		$init = strtoupper($callNum);
		//get rid of leading whitespace
		$init = preg_replace('/^\s+/', '', $init);
		//get rid of extra whitespace at end of string
		$init = preg_replace('/\s+$/', '', $init);
	  //remove any slashes
		$init = preg_replace('/\//', '', $init);
		//remove any backslashes
		$init = stripslashes($init);
		// replace newline characters
		$init = preg_replace('/\n/','', $init);
		
		
        $key = $init;
    
		
		echo $key;
	}
		
	sortNums($callNum);
?>
