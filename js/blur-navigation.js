/*
@licstart  The following is the entire license notice for the
JavaScript code in this page.

The JavaScript code in this page is free software: you can
redistribute it and/or modify it under the terms of the GNU
General Public License (GNU GPL) as published by the Free Software
Foundation, either version 3 of the License, or (at your option)
any later version.  The code is distributed WITHOUT ANY WARRANTY;
without even the implied warranty of MERCHANTABILITY or FITNESS
FOR A PARTICULAR PURPOSE.  See the GNU GPL for more details.

As additional permission under GNU GPL version 3 section 7, you
may distribute non-source (e.g., minimized or compacted) forms of
that code without the copy of the GNU GPL normally required by
section 4, provided you include this license notice and a URL
through which recipients can access the Corresponding Source.


@licend  The above is the entire license notice
for the JavaScript code in this page.
*/

let e,t;function o(){document.body.style.filter="",document.removeEventListener("keydown",o),document.removeEventListener("mousedown",o),t&&(t.removeEventListener("mousedown",o),t.remove())}document.querySelectorAll("a").forEach((n=>{n.addEventListener("click",(d=>{d.ctrlKey||d.metaKey||d.shiftKey||"_blank"===n.target||(document.body.style.filter="blur(5px)",document.addEventListener("keydown",o),document.addEventListener("mousedown",o),e=setTimeout((()=>{if("blur(5px)"===document.body.style.filter){t=document.createElement("div.prompt"),t.style.position="fixed",t.style.top="0",t.style.left="0",t.style.width="100%",t.style.height="100%",t.style.zIndex="1001",document.documentElement.appendChild(t);const e=document.createElement("div.prompt");e.textContent="Tap or click anywhere to disable blur",e.style.position="absolute",e.style.top="50%",e.style.left="50%",e.style.transform="translate(-50%, -50%)",e.style.fontSize="24px",e.style.fontWeight="bold",e.style.color="white",e.style.backgroundColor="rgba(0, 0, 0, 0.5)",e.style.padding="20px",e.style.borderRadius="10px",e.style.zIndex="1002",t.appendChild(e),t.addEventListener("mousedown",o)}else clearTimeout(e)}),1024))}))})),window.addEventListener("beforeunload",(()=>{clearTimeout(e)})),window.addEventListener("pageshow",(e=>{if(e.persisted){document.body.style.filter="";const e=document.querySelector("div.prompt");e&&e.remove()}}));
