var arr = [];
for (let measure of measurements) {
    if (id == measure._id){
        arr.push(measure)
    }
}

for (let measure of measurements) {
    if (arr.indexOf(measure) == -1){
        alert(measure.name)
    }
}


