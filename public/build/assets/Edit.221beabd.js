import{m as f,o as p,c as _,a,u as t,w as i,F as v,H as b,b as l,t as r,p as h,n as x,j as V}from"./app.043dd9e9.js";import{_ as g}from"./Authenticated.b9d2d812.js";import{_ as w}from"./Button.8ce61165.js";import{_ as y,a as n,b as d}from"./ValidationErrors.2f6799ae.js";const k={class:"font-semibold text-xl text-gray-800 leading-tight"},E={class:"py-4 relative"},$={class:"max-w-7xl mx-auto sm:px-6 lg:px-8"},F={class:"bg-white overflow-hidden shadow-sm sm:rounded-lg"},N={class:"p-6 bg-white border-b border-gray-200"},S={class:"mt-4"},U={class:"mt-4"},B={class:"flex items-center justify-end mt-4"},j=V(" Edit "),L={__name:"Edit",props:{data:String},setup(m){const e=f({name:"",lastname:"",email:"",phone:""}),c=u=>{e.post(route("employee.update",u),{preserveState:!0,onFinish:()=>e.reset()})};return(u,s)=>(p(),_(v,null,[a(t(b),{title:"Edit "+m.data.name+" "+m.data.lastname},null,8,["title"]),a(g,null,{header:i(()=>[l("h2",k," Edit "+r(m.data.name)+" "+r(m.data.lastname),1)]),default:i(()=>[l("div",E,[l("div",$,[l("div",F,[l("div",N,[a(y,{class:"mb-4"}),l("form",{onSubmit:s[4]||(s[4]=h(o=>c(m.data.id),["prevent"]))},[l("div",null,[a(n,{for:"name",value:"Name"}),a(d,{id:"name",type:"text",class:"mt-1 block w-full",modelValue:t(e).name,"onUpdate:modelValue":s[0]||(s[0]=o=>t(e).name=o),autofocus:""},null,8,["modelValue"])]),l("div",null,[a(n,{for:"lastname",value:"Lastame"}),a(d,{id:"lastname",type:"text",class:"mt-1 block w-full",modelValue:t(e).lastname,"onUpdate:modelValue":s[1]||(s[1]=o=>t(e).lastname=o)},null,8,["modelValue"])]),l("div",S,[a(n,{for:"email",value:"Email"}),a(d,{id:"email",type:"email",class:"mt-1 block w-full",modelValue:t(e).email,"onUpdate:modelValue":s[2]||(s[2]=o=>t(e).email=o)},null,8,["modelValue"])]),l("div",U,[a(n,{for:"phone",value:"Phone"}),a(d,{id:"phone",type:"text",class:"mt-1 block w-full",modelValue:t(e).phone,"onUpdate:modelValue":s[3]||(s[3]=o=>t(e).phone=o)},null,8,["modelValue"])]),l("div",B,[a(w,{class:x(["ml-4",{"opacity-25":t(e).processing}]),disabled:t(e).processing},{default:i(()=>[j]),_:1},8,["class","disabled"])])],32)])])])])]),_:1})],64))}};export{L as default};
