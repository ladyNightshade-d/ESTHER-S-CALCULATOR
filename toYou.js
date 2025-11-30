function reversedNumber(num){
    let reversed=0;
    let number=Math.abs(num)
    while (number > 0){
        let digit= number%10;
        reversed = reversed * 10 + digit;
        number = Math.floor(number / 10);
    }
    return reversed;
}
