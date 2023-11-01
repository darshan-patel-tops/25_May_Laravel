<script>
    function getallProductsData(){
        fetch("http://localhost:8000/api/allproducts").then((res)=>res.json()).then((response)=>{
            console.log(response);
            htmltabledata = ""
            response.forEach(data => {
                htmltabledata += `<tr>
                <td>${data.product_title}</td>
                <td>${data.product_description}</td>
                <td>${data.product_price}</td>
                <td>${data.product_qunatity}</td>
                <td> <button onclick="editprod(${data.id})">edit</button> </td>
                </tr>`
            });
            document.getElementById("prod_data").innerHTML = htmltabledata
        })
    }
    getallProductsData()
function saveproductdata(pid) {
    console.log("called save prod Data");
    var result = { };
    $.each($('#productForm').serializeArray(), function() {
        result[this.name] = this.value;
    });
    console.log("result",result);
    
    fetch("http://localhost:8000/api/insertproduct", {
    method: "POST", // *GET, POST, PUT, DELETE, etc.
    mode: "cors", // no-cors, *cors, same-origin
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(result), // body data type must match "Content-Type" header
  }).then((res)=>res.json()).then((response)=>{
        console.log(response);
        getallProductsData()
    })
}
function updateprod(pid) {
    console.log("called save prod Data");
    var result = { };
    $.each($('#productForm').serializeArray(), function() {
        result[this.name] = this.value;
    });
    console.log("result",result);
    
    fetch("http://localhost:8000/api/updateproduct/"+pid, {
    method: "POST", // *GET, POST, PUT, DELETE, etc.
    mode: "cors", // no-cors, *cors, same-origin
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(result), // body data type must match "Content-Type" header
  }).then((res)=>res.json()).then((response)=>{
        console.log(response);
        getallProductsData()
    })
}
function editprod(pid) {
    var result = { };
    // fetch("http://localhost:8000/api/productdatabyid/"+pid).then((res)=>res.json()).then((response)=>{
    fetch(`http://localhost:8000/api/productdatabyid/${pid}`).then((res)=>res.json()).then((response)=>{
            console.log(response);
           document.getElementById("product_title").value = response.product_title 
           document.getElementById("productForm").setAttribute("onsubmit", "event.preventDefault(); updateprod("+pid+")");
           getallProductsData()
        //    document.getElementById("productForm").onsubmit = function() {
        //     console.log("called inside productForm");
        //     return countChecked()};

        })
    // $.each($('form').serializeArray(), function() {
    //     result[this.name] = this.value;
    // });
    // console.log(pid);
}
</script>