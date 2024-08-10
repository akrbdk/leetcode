func findTheDifference(s string, t string) byte {
    var c = t[len(s)];
    
    for  i:= 0; i < len(s); i++ {
		c ^= s[i];
		c ^= t[i];
	}   
    
	return c;
}