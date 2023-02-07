function queueTime(customers, n) {
    // But : pour un "n" nombre de caisses, compiler (en additionnant)  tous les temps des "customers" en prioritisant la caisse la moins encombrée

    // Créer un arrayOfQueues avec "n" éléments avec valeur 0
    const arrayOfQueues = new Array(n).fill(0)

    // Bouclé sur tous les customers 
    for(let cust of customers) {
        // Récupérer l'index la caisse la moins remplie
        let minInArrayOfQueues = Math.min(...arrayOfQueues)
        let indexMin = arrayOfQueues.indexOf(minInArrayOfQueues)
        // Additionner le premier consommateur de "customers" à l'index min de "arrayOfQueues" 
        arrayOfQueues[indexMin] += cust
    }
    // time max
    return Math.max(...arrayOfQueues)
}

console.log(queueTime([2,3,10], 2))