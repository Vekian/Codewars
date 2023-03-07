function findEvenIndex(arr){ 
    function calculateSumLeft(mid) {
      let sumLeft = 0;
      if (mid === 0) {
        return 0;
      }
      else {
      for (let y = 0; y < mid; y++) {
        sumLeft += arr[y];
      }
           return sumLeft;
    }}
      
      function calculateSumRight(mid) {
        let sumRight = 0;
        if (mid === arr.length-1) {
          return 0;
        }
        for (let z = mid + 1; z < arr.length; z++) {
          sumRight += arr[z];
        }
        return sumRight;
      }
    
      for (let i=0; i < (arr.length); i++) {
       if ((i === (arr.length-1)) && (calculateSumRight(i) !== calculateSumLeft(i))) {
          return -1;
        }
       else if (calculateSumRight(i) === calculateSumLeft(i)) {
          return i;
        }
      }}