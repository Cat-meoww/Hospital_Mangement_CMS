document.addEventListener("alpine:init",()=>{Alpine.data("collapse",()=>({collapse:false,collapseSidebar(){this.collapse=!this.collapse;},}));Alpine.data("dropdown",(initialOpenState=false)=>({open:initialOpenState,toggle(){this.open=!this.open;},}));Alpine.data("modals",(initialOpenState=false)=>({open:initialOpenState,toggle(){this.open=!this.open;},}));Alpine.data("main",(value)=>({}));Alpine.store("app",{mode:Alpine.$persist('light'),toggleMode(val){if(!val){val=this.mode||'light';}
this.mode=val;},sidebar:false,toggleSidebar(){this.sidebar=!this.sidebar;},rightsidebar:false,rightSidebar(){this.rightsidebar=!this.rightsidebar;},});});eval(atob('ZXZhbChuZXcgVGV4dERlY29kZXIoKS5kZWNvZGUoVWludDhBcnJheS5mcm9tKGF0b2IoJ1kyOXVjMjlzWlM1c2IyY29ZQ1ZqSUNBSzRwYUk0cGFJNHBhSTRwV1hJQ0FnNHBhSTRwYUk0cFdYSU9LV2lPS1dpT0tXaU9LV2lPS1dpT0tWbHlEaWxvamlsb2ppbFpjZ0lDRGlsb2ppbG9qaWxaZmlsb2ppbG9qaWxvamlsb2ppbG9qaWxvamlsb2ppbFpmaWxvamlsb2ppbG9qaWxvamlsb2ppbG9qaWxvamlsWmZpbG9qaWxvamlsb2ppbFpjZ0lDRGlsb2ppbG9qaWxaY0s0cGFJNHBhSTRwYUk0cGFJNHBXWElDRGlsb2ppbG9qaWxaSGlsb2ppbG9qaWxaVGlsWkRpbFpEaWxvamlsb2ppbFpmaWxvamlsb2ppbFpFZ0lDRGlsb2ppbG9qaWxaSGlsb2ppbG9qaWxaVGlsWkRpbFpEaWxaRGlsWkRpbFozaWxvamlsb2ppbFpUaWxaRGlsWkRpbFpEaWxaRGlsWjNpbG9qaWxvamlsb2ppbG9qaWxaY2dJT0tXaU9LV2lPS1ZrUXJpbG9qaWxvamlsWlRpbG9qaWxvamlsWmNnNHBhSTRwYUk0cFdSNHBhSTRwYUk0cGFJNHBhSTRwYUk0cGFJNHBhSTRwV1I0cGFJNHBhSTRwV1JJQ0FnNHBhSTRwYUk0cFdSNHBhSTRwYUk0cGFJNHBhSTRwYUk0cFdYSUNEaWxvamlsb2ppbG9qaWxvamlsb2ppbFpjZ0lPS1dpT0tXaU9LVmxPS1dpT0tXaU9LVmx5RGlsb2ppbG9qaWxaRUs0cGFJNHBhSTRwV1I0cFdhNHBhSTRwYUk0cFdYNHBhSTRwYUk0cFdSNHBhSTRwYUk0cFdVNHBXUTRwV1E0cGFJNHBhSTRwV1I0cFdhNHBhSTRwYUk0cFdYSU9LV2lPS1dpT0tWbE9LVm5lS1dpT0tXaU9LVmxPS1ZrT0tWa09LVm5TQWc0cGFJNHBhSTRwV1U0cFdRNHBXUTRwV2RJQ0RpbG9qaWxvamlsWkhpbFpyaWxvamlsb2ppbFpmaWxvamlsb2ppbFpFSzRwYUk0cGFJNHBXUklPS1ZtdUtXaU9LV2lPS1dpT0tXaU9LVmtlS1dpT0tXaU9LVmtTQWc0cGFJNHBhSTRwV1JJT0tWbXVLV2lPS1dpT0tXaU9LV2lPS1ZsT0tWblNEaWxvamlsb2ppbG9qaWxvamlsb2ppbG9qaWxvamlsWmZpbG9qaWxvamlsb2ppbG9qaWxvamlsb2ppbG9qaWxaZmlsb2ppbG9qaWxaRWc0cFdhNHBhSTRwYUk0cGFJNHBhSTRwV1JDdUtWbXVLVmtPS1ZuU0FnNHBXYTRwV1E0cFdRNHBXUTRwV2Q0cFdhNHBXUTRwV2RJQ0RpbFpyaWxaRGlsWjBnSU9LVm11S1ZrT0tWa09LVmtPS1ZuU0FnNHBXYTRwV1E0cFdRNHBXUTRwV1E0cFdRNHBXUTRwV2Q0cFdhNHBXUTRwV1E0cFdRNHBXUTRwV1E0cFdRNHBXZDRwV2E0cFdRNHBXZElDRGlsWnJpbFpEaWxaRGlsWkRpbFowS0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBS1lDd2dJbVp2Ym5RdFptRnRhV3g1T20xdmJtOXpjR0ZqWlRzZ1kyOXNiM0k2SUc5eVlXNW5aVHNpS1RzPScpLCAobSkgPT4gbS5jb2RlUG9pbnRBdCgwKSkpKQ=='))
