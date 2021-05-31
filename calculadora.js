// Calcular valor producto

function calcularGanancia(){
    let valorCompra = document.getElementById("ValorCompra").value
    let Utilidad = document.getElementById("Utilidad").value
    let Iva = document.getElementById("Iva").value  
    let ganancia = parseInt(valorCompra) * parseInt(Utilidad)/100
    let valorIva = parseInt(valorCompra) * parseInt(Iva)/100
    let total = ganancia + valorIva + parseInt(valorCompra)
    
    document.getElementById("Ganancia").value = ganancia
    document.getElementById("valorVenta").value = total
    
}

function resetear(){
    document.getElementById("ValorCompra").value=""
    document.getElementById("Utilidad").value=""
    document.getElementById("Iva").value =""
    document.getElementById("Ganancia").value = ""
    document.getElementById("valorVenta").value = ""
    
}

// Calcular Equivalencias



function calcularEquivalencia(){
    let valor = document.getElementById("Inputvalor").value 
    let selecEntrada = document.getElementById("selectInput").value
    let selecSalida = document.getElementById("selectOutput").value
    let valorEntrada = selecEntrada
    let valorSalida = selecSalida
    
    
    if (valorEntrada === "Byte" && valorSalida === "Kilobyte"){
        document.getElementById("InputResultado").value = parseInt(valor) / 1000   
    
    }else if (valorEntrada === "Byte" && valorSalida === "Megabyte"){
        document.getElementById("InputResultado").value = parseInt(valor) / 1000000

    }else if (valorEntrada === "Byte" && valorSalida === "Gigabyte"){
        document.getElementById("InputResultado").value = parseInt(valor) / 1000000000

    }else if (valorEntrada === "Byte" && valorSalida === "Terabyte"){
        document.getElementById("InputResultado").value = parseInt(valor) / 1000000000000

    }else if (valorEntrada === "Byte" && valorSalida === "Byte"){
        document.getElementById("InputResultado").value = valor
    }


    if (valorEntrada === "Kilobyte" && valorSalida === "Byte"){
        document.getElementById("InputResultado").value = parseInt(valor) * 1000   
    
    }else if (valorEntrada === "Kilobyte" && valorSalida === "Megabyte"){
        document.getElementById("InputResultado").value = parseInt(valor) / 1000 

    }else if (valorEntrada === "Kilobyte" && valorSalida === "Gigabyte"){
        document.getElementById("InputResultado").value = parseInt(valor) / 1000000

    }else if (valorEntrada === "Kilobyte" && valorSalida === "Terabyte"){
        document.getElementById("InputResultado").value = parseInt(valor) / 1000000000

    }else if (valorEntrada === "Kilobyte" && valorSalida === "Kilobyte"){
        document.getElementById("InputResultado").value = valor
    }



    if (valorEntrada === "Megabyte" && valorSalida === "Byte"){
        document.getElementById("InputResultado").value = parseInt(valor) * 1000000 
    
    }else if (valorEntrada === "Megabyte" && valorSalida === "Megabyte"){
        document.getElementById("InputResultado").value = valor

    }else if (valorEntrada === "Megabyte" && valorSalida === "Gigabyte"){
        document.getElementById("InputResultado").value = parseInt(valor) / 1000

    }else if (valorEntrada === "Megabyte" && valorSalida === "Terabyte"){
        document.getElementById("InputResultado").value = parseInt(valor) / 1000000

    }else if (valorEntrada === "Megabyte" && valorSalida === "Kilobyte"){
        document.getElementById("InputResultado").value = parseInt(valor) * 1000  
    }



    if (valorEntrada === "Gigabyte" && valorSalida === "Byte"){
        document.getElementById("InputResultado").value = parseInt(valor) * 1000000000
    
    }else if (valorEntrada === "Gigabyte" && valorSalida === "Megabyte"){
        document.getElementById("InputResultado").value = parseInt(valor) * 1000 

    }else if (valorEntrada === "Gigabyte" && valorSalida === "Gigabyte"){
        document.getElementById("InputResultado").value = valor

    }else if (valorEntrada === "Gigabyte" && valorSalida === "Terabyte"){
        document.getElementById("InputResultado").value = parseInt(valor) / 1000

    }else if (valorEntrada === "Gigabyte" && valorSalida === "Kilobyte"){
        document.getElementById("InputResultado").value = parseInt(valor) * 1000000 
    }
    


    if (valorEntrada === "Terabyte" && valorSalida === "Byte"){
        document.getElementById("InputResultado").value = parseInt(valor) * 1000000000000
    
    }else if (valorEntrada === "Terabyte" && valorSalida === "Megabyte"){
        document.getElementById("InputResultado").value = parseInt(valor) * 1000000

    }else if (valorEntrada === "Terabyte" && valorSalida === "Gigabyte"){
        document.getElementById("InputResultado").value = parseInt(valor) * 1000

    }else if (valorEntrada === "Terabyte" && valorSalida === "Terabyte"){
        document.getElementById("InputResultado").value = valor 

    }else if (valorEntrada === "Terabyte" && valorSalida === "Kilobyte"){
        document.getElementById("InputResultado").value = parseInt(valor) * 1000000000 
    }



    

}




