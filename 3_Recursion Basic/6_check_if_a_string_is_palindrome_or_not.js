function isPalindrome(str,l,r){
    if(l>r){
        return true;
    }
    if(str.charAt(l) != str.charAt(r)){
        return false;
    }
    return isPalindrome(str,l+1,r-1);
}   

var str = "madam";

console.log(isPalindrome(str,0,str.length-1));