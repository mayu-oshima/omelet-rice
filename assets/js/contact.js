// Contactページ
document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("form");

  form.addEventListener("submit", function (e) {
    let isValid = true;
    let warnings = [];

    const fields = [
      { id: "name_sei", message: "・お名前(姓)の入力を行ってください。" },
      { id: "name_mei", message: "・お名前(名)の入力を行ってください。" },
      { id: "email", message: "・メールアドレスの入力を行ってください。" },
      { id: "message", message: "・お問い合わせ内容の入力を行ってください。" },
    ];

    fields.forEach(function (field) {
      const input = document.getElementsByName(field.id)[0];
      if (!input || input.value.trim() === "") {
        isValid = false;
        warnings.push(`<span class='warning'>${field.message}</span><br>`);
      }
    });

    // 既存のエラーメッセージ削除
    const oldWarnings = document.querySelectorAll(".warning, .warning + br");
    oldWarnings.forEach(el => el.remove());

    if (!isValid) {
      e.preventDefault();

      // アラート表示
      alert("入力内容に不備があります。ご確認ください。");

      const container = document.getElementById("contact_form");
      if (container) {
        container.insertAdjacentHTML("beforebegin", warnings.join(""));
      }
    }
  });
});