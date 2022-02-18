$("#fetch").on("click", () => {
  $.ajax({
    url: "data.json",
    type: "GET",
    dataType: "JSON",
    success: function (data) {
      $("#fetch").hide();
      $("table").show();
      $("#text2").show();
      $("#text1").hide();
      str = "";
      for (key in data) {
        str += `<tr>
        <td>${data[key].id}</td>
        <td>${data[key].name}</td>
        <td>${data[key].username}</td>
        <td>${data[key].website}</td>
        <td>${data[key].phone}</td>
        <td>${data[key].address.street}, ${data[key].address.city}, ${data[key].address.zipcode}</td>
        <td>${data[key].company.name}</td>
        </tr>`;
      }
      $("#tb-1").html(str);
    },
    complete: function () {
      console.log("cmplt");
    },
  });
});
