$(function(){"use strict";$(document).ready(function(){$('#calendar1').fullCalendar({header:{left:'prev,next today',center:'title',right:'month,agendaWeek,agendaDay,listWeek'},defaultDate:'2018-03-12',navLinks:true,editable:true,eventLimit:true,events:[{title:'All Day Event',start:'2018-03-01',},{title:'Long Event',start:'2018-03-07',end:'2018-03-10'},{id:999,title:'Repeating Event',start:'2018-03-09T16:00:00',backgroundColor:'#ffc108',borderColor:'#ffc108'},{id:999,title:'Repeating Event',start:'2018-03-16T16:00:00',backgroundColor:'#ffc108',borderColor:'#ffc108'},{title:'Conference',start:'2018-03-11',end:'2018-03-13',backgroundColor:'#ff407b',borderColor:'#ff407b'},{title:'Meeting',start:'2018-03-12T10:30:00',end:'2018-03-12T12:30:00',backgroundColor:'#25d5f2',borderColor:'#25d5f2'},{title:'Lunch',start:'2018-03-12T12:00:00',backgroundColor:'#ff407b',borderColor:'#ff407b'},{title:'Meeting',start:'2018-03-12T14:30:00',backgroundColor:'#25d5f2',borderColor:'#25d5f2'},{title:'Happy Hour',start:'2018-03-12T17:30:00'},{title:'Dinner',start:'2018-03-12T20:00:00'},{title:'Birthday Party',start:'2018-03-13T07:00:00',backgroundColor:'#ef172c',borderColor:'#ef172c'},{title:'Click for Google',url:'http://google.com/',start:'2018-03-28',backgroundColor:'#4285F4',borderColor:'#4285F4'}]});});$(document).ready(function(){$('#external-events .fc-event').each(function(){$(this).data('event',{title:$.trim($(this).text()),stick:true});$(this).draggable({zIndex:999,revert:true,revertDuration:0});});$('#calendar').fullCalendar({header:{left:'prev,next today',center:'title',right:'month,agendaWeek,agendaDay'},editable:true,droppable:true,drop:function(){if($('#drop-remove').is(':checked')){$(this).remove();}}});});});