document.addEventListener("DOMContentLoaded", () => {
  let optionAdminRender = document.getElementById("optionAdminRender");

  // Kiểm tra nếu không có 'id' trong URL, đặt 'id' mặc định là 1
  let currentUrl = new URL(window.location.href);
  if (!currentUrl.searchParams.get("id")) {
    currentUrl.searchParams.set("id", 1);
    window.location.href = currentUrl.toString();
  }

  optionAdminRender.addEventListener("change", () => {
    let categoryId = optionAdminRender.value;
    if (categoryId) {
      // Đặt hoặc cập nhật tham số 'id'
      currentUrl.searchParams.set("id", categoryId);
      // Điều hướng tới URL mới
      window.location.href = currentUrl.toString();
    }
  });
});
document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".delete-product").forEach((link) => {
    link.addEventListener("click", function (event) {
      if (!confirm("Bạn có chắc chắn muốn xoá sản phẩm này không?")) {
        event.preventDefault();
      }
    });
  });
});
// let btnUpdateProducts = document.querySelectorAll(".btn-update-product");
// console.log(btnUpdateProducts);
// let count = 0;
// for (count; count < btnUpdateProducts.length - 1; count++) {
//   btnUpdateProducts[count].addEventListener("click", () => {
//     alert("test");
//   });
// }

// document.addEventListener("DOMContentLoaded", () => {
//   let optionAdminRender = document.getElementById("optionAdminRender");
//   optionAdminRender.addEventListener("change", () => {
//     let categoryId = optionAdminRender.value;
//     if (categoryId) {
//       // Lấy URL hiện tại
//       let currentUrl = new URL(window.location.href);
//       // Đặt tham số 'action' thành 'getCategory'
//       currentUrl.searchParams.set("action", "getCategory");
//       // Đặt hoặc cập nhật tham số 'id'
//       currentUrl.searchParams.set("id", categoryId);
//       // Điều hướng tới URL mới
//       window.location.href = currentUrl.toString();
//     }
//   });
// });
