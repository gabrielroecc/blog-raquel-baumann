const sidebar = document.querySelector("aside");
const showSidebarBtn = document.querySelector("#show_sidebar_btn");
const hideSidebarBtn = document.querySelector("#hide_sidebar_btn");

const showSidebar = () => {
	sidebar.style.left = "0";
	showSidebarBtn.style.display = "none";
	hideSidebarBtn.style.display = "block";
};
const hideSidebar = () => {
	sidebar.style.left = "-100%";
	showSidebarBtn.style.display = "block";
	hideSidebarBtn.style.display = "none";
};
showSidebarBtn.addEventListener("click", showSidebar);
hideSidebarBtn.addEventListener("click", hideSidebar);
