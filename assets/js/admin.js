document.addEventListener("DOMContentLoaded", () => {
  let optionAdminRender = document.getElementById("optionAdminRender");

  let currentUrl = new URL(window.location.href);
  if (!currentUrl.searchParams.get("id")) {
    currentUrl.searchParams.set("id", 1);
    window.location.href = currentUrl.toString();
  }

  optionAdminRender.addEventListener("change", () => {
    let categoryId = optionAdminRender.value;
    if (categoryId) {
      currentUrl.searchParams.set("id", categoryId);
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
