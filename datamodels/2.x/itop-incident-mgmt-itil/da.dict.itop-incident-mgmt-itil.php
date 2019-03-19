<?php
// Copyright (C) 2010-2012 Combodo SARL
//
//   This file is part of iTop.
//
//   iTop is free software; you can redistribute it and/or modify
//   it under the terms of the GNU Affero General Public License as published by
//   the Free Software Foundation, either version 3 of the License, or
//   (at your option) any later version.
//
//   iTop is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU Affero General Public License for more details.
//
//   You should have received a copy of the GNU Affero General Public License
//   along with iTop. If not, see <http://www.gnu.org/licenses/>
/**
 * @author	Erik Bøg <erik@boegmoeller.dk>
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @licence	http://opensource.org/licenses/AGPL-3.0
 */
Dict::Add('DA DA', 'Danish', 'Dansk', array(
	'Menu:IncidentManagement' => 'Incident Management',
	'Menu:IncidentManagement+' => '',
	'Menu:Incident:Overview' => 'Oversigt',
	'Menu:Incident:Overview+' => '',
	'Menu:NewIncident' => 'Ny Incident',
	'Menu:NewIncident+' => '',
	'Menu:SearchIncidents' => 'Søg efter Incidents',
	'Menu:SearchIncidents+' => '',
	'Menu:Incident:Shortcuts' => 'Genveje',
	'Menu:Incident:Shortcuts+' => '',
	'Menu:Incident:MyIncidents' => 'Mine Incidents',
	'Menu:Incident:MyIncidents+' => '',
	'Menu:Incident:EscalatedIncidents' => 'Eskalerede Incidents',
	'Menu:Incident:EscalatedIncidents+' => '',
	'Menu:Incident:OpenIncidents' => 'Alle åbne Incidents',
	'Menu:Incident:OpenIncidents+' => '',
	'UI-IncidentManagementOverview-IncidentByPriority-last-14-days' => 'Incidents de sidste 14 dage efter prioritet',
	'UI-IncidentManagementOverview-Last-14-days' => 'Antal Incidents de sidste 14 dage',
	'UI-IncidentManagementOverview-OpenIncidentByStatus' => 'Åbne Incidents efter status',
	'UI-IncidentManagementOverview-OpenIncidentByAgent' => 'Åbne Incidents efter tildelt til',
	'UI-IncidentManagementOverview-OpenIncidentByCustomer' => 'Åbne Incidents efter bruger',
));




// Dictionnay conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+

//
// Class: Incident
//

Dict::Add('DA DA', 'Danish', 'Dansk', array(
	'Class:Incident' => 'Incident',
	'Class:Incident+' => '',
	'Class:Incident/Attribute:status' => 'Status',
	'Class:Incident/Attribute:status+' => '',
	'Class:Incident/Attribute:status/Value:new' => 'Ny',
	'Class:Incident/Attribute:status/Value:new+' => '',
	'Class:Incident/Attribute:status/Value:escalated_tto' => 'Eskaleret TTO',
	'Class:Incident/Attribute:status/Value:escalated_tto+' => '',
	'Class:Incident/Attribute:status/Value:assigned' => 'Tildelt',
	'Class:Incident/Attribute:status/Value:assigned+' => '',
	'Class:Incident/Attribute:status/Value:escalated_ttr' => 'Eskaleret TTR',
	'Class:Incident/Attribute:status/Value:escalated_ttr+' => '',
	'Class:Incident/Attribute:status/Value:waiting_for_approval' => 'Afventer godkendelse',
	'Class:Incident/Attribute:status/Value:waiting_for_approval+' => '',
	'Class:Incident/Attribute:status/Value:pending' => 'Afventer',
	'Class:Incident/Attribute:status/Value:pending+' => '',
	'Class:Incident/Attribute:status/Value:resolved' => 'Løst',
	'Class:Incident/Attribute:status/Value:resolved+' => '',
	'Class:Incident/Attribute:status/Value:closed' => 'Lukket',
	'Class:Incident/Attribute:status/Value:closed+' => '',
	'Class:Incident/Attribute:impact' => 'Påvirkning',
	'Class:Incident/Attribute:impact+' => '',
	'Class:Incident/Attribute:impact/Value:1' => 'Afdeling',
	'Class:Incident/Attribute:impact/Value:1+' => 'En afdeling er påvirket',
	'Class:Incident/Attribute:impact/Value:2' => 'Service',
	'Class:Incident/Attribute:impact/Value:2+' => 'En service er påvirket',
	'Class:Incident/Attribute:impact/Value:3' => 'Person',
	'Class:Incident/Attribute:impact/Value:3+' => 'En person er påvirket',
	'Class:Incident/Attribute:priority' => 'Prioritet',
	'Class:Incident/Attribute:priority+' => '',
	'Class:Incident/Attribute:priority/Value:1' => 'Kritisk',
	'Class:Incident/Attribute:priority/Value:1+' => '',
	'Class:Incident/Attribute:priority/Value:2' => 'Høj',
	'Class:Incident/Attribute:priority/Value:2+' => '',
	'Class:Incident/Attribute:priority/Value:3' => 'Middel',
	'Class:Incident/Attribute:priority/Value:3+' => '',
	'Class:Incident/Attribute:priority/Value:4' => 'Lav',
	'Class:Incident/Attribute:priority/Value:4+' => '',
	'Class:Incident/Attribute:urgency' => 'Vigtighed',
	'Class:Incident/Attribute:urgency+' => '',
	'Class:Incident/Attribute:urgency/Value:1' => 'Kritisk',
	'Class:Incident/Attribute:urgency/Value:1+' => '',
	'Class:Incident/Attribute:urgency/Value:2' => 'Høj',
	'Class:Incident/Attribute:urgency/Value:2+' => '',
	'Class:Incident/Attribute:urgency/Value:3' => 'Middel',
	'Class:Incident/Attribute:urgency/Value:3+' => '',
	'Class:Incident/Attribute:urgency/Value:4' => 'Lav',
	'Class:Incident/Attribute:urgency/Value:4+' => '',
	'Class:Incident/Attribute:origin' => 'Oprindelse',
	'Class:Incident/Attribute:origin+' => '',
	'Class:Incident/Attribute:origin/Value:mail' => 'Mail',
	'Class:Incident/Attribute:origin/Value:mail+' => '',
	'Class:Incident/Attribute:origin/Value:monitoring' => 'Monitoring',
	'Class:Incident/Attribute:origin/Value:monitoring+' => '',
	'Class:Incident/Attribute:origin/Value:phone' => 'Telefon',
	'Class:Incident/Attribute:origin/Value:phone+' => '',
	'Class:Incident/Attribute:origin/Value:portal' => 'Portal',
	'Class:Incident/Attribute:origin/Value:portal+' => '',
	'Class:Incident/Attribute:service_id' => 'Ydelse',
	'Class:Incident/Attribute:service_id+' => '',
	'Class:Incident/Attribute:service_name' => 'Ydelsesnavn',
	'Class:Incident/Attribute:service_name+' => '',
	'Class:Incident/Attribute:servicesubcategory_id' => 'Ydelse underkategori',
	'Class:Incident/Attribute:servicesubcategory_id+' => '',
	'Class:Incident/Attribute:servicesubcategory_name' => 'Ydelses underkategorinavn',
	'Class:Incident/Attribute:servicesubcategory_name+' => '',
	'Class:Incident/Attribute:escalation_flag' => 'Eskalations Flag',
	'Class:Incident/Attribute:escalation_flag+' => '',
	'Class:Incident/Attribute:escalation_flag/Value:no' => 'Nej',
	'Class:Incident/Attribute:escalation_flag/Value:no+' => '',
	'Class:Incident/Attribute:escalation_flag/Value:yes' => 'Ja',
	'Class:Incident/Attribute:escalation_flag/Value:yes+' => '',
	'Class:Incident/Attribute:escalation_reason' => 'Eskalationsgrund',
	'Class:Incident/Attribute:escalation_reason+' => '',
	'Class:Incident/Attribute:assignment_date' => 'Tildelt dato',
	'Class:Incident/Attribute:assignment_date+' => '',
	'Class:Incident/Attribute:resolution_date' => 'Løsnings dato',
	'Class:Incident/Attribute:resolution_date+' => '',
	'Class:Incident/Attribute:last_pending_date' => 'Sidste udsættelse dato',
	'Class:Incident/Attribute:last_pending_date+' => '',
	'Class:Incident/Attribute:cumulatedpending' => 'Akkumuleret ventetid',
	'Class:Incident/Attribute:cumulatedpending+' => '',
	'Class:Incident/Attribute:tto' => 'TTO (Time To Own)',
	'Class:Incident/Attribute:tto+' => '',
	'Class:Incident/Attribute:ttr' => 'TTR (Time To Resolve)',
	'Class:Incident/Attribute:ttr+' => '',
	'Class:Incident/Attribute:tto_escalation_deadline' => 'TTO-Deadline',
	'Class:Incident/Attribute:tto_escalation_deadline+' => '',
	'Class:Incident/Attribute:sla_tto_passed' => 'SLA TTO overskredet',
	'Class:Incident/Attribute:sla_tto_passed+' => '',
	'Class:Incident/Attribute:sla_tto_over' => 'Overskridelse SLA TTO',
	'Class:Incident/Attribute:sla_tto_over+' => '',
	'Class:Incident/Attribute:ttr_escalation_deadline' => 'TTR-Deadline',
	'Class:Incident/Attribute:ttr_escalation_deadline+' => '',
	'Class:Incident/Attribute:sla_ttr_passed' => 'SLA TTR overskredet',
	'Class:Incident/Attribute:sla_ttr_passed+' => '',
	'Class:Incident/Attribute:sla_ttr_over' => 'Overskridelse SLA TTR',
	'Class:Incident/Attribute:sla_ttr_over+' => '',
	'Class:Incident/Attribute:time_spent' => 'Tid forbrugt til løsning',
	'Class:Incident/Attribute:time_spent+' => '',
	'Class:Incident/Attribute:resolution_code' => 'Løsningskode',
	'Class:Incident/Attribute:resolution_code+' => '',
	'Class:Incident/Attribute:resolution_code/Value:assistance' => 'Assistance',
	'Class:Incident/Attribute:resolution_code/Value:assistance+' => '',
	'Class:Incident/Attribute:resolution_code/Value:bug fixed' => 'Bugfix',
	'Class:Incident/Attribute:resolution_code/Value:bug fixed+' => '',
	'Class:Incident/Attribute:resolution_code/Value:hardware repair' => 'Hardware Reparation',
	'Class:Incident/Attribute:resolution_code/Value:hardware repair+' => '',
	'Class:Incident/Attribute:resolution_code/Value:other' => 'Andet',
	'Class:Incident/Attribute:resolution_code/Value:other+' => '',
	'Class:Incident/Attribute:resolution_code/Value:software patch' => 'Software Patch',
	'Class:Incident/Attribute:resolution_code/Value:software patch+' => '',
	'Class:Incident/Attribute:resolution_code/Value:system update' => 'System Update',
	'Class:Incident/Attribute:resolution_code/Value:system update+' => '',
	'Class:Incident/Attribute:resolution_code/Value:training' => 'Uddannelse',
	'Class:Incident/Attribute:resolution_code/Value:training+' => '',
	'Class:Incident/Attribute:solution' => 'Løsning',
	'Class:Incident/Attribute:solution+' => '',
	'Class:Incident/Attribute:pending_reason' => 'Årsag til afventer',
	'Class:Incident/Attribute:pending_reason+' => '',
	'Class:Incident/Attribute:parent_incident_id' => 'Parent Incident',
	'Class:Incident/Attribute:parent_incident_id+' => '',
	'Class:Incident/Attribute:parent_incident_ref' => 'Parent-Incident-Reference',
	'Class:Incident/Attribute:parent_incident_ref+' => '',
	'Class:Incident/Attribute:parent_change_id' => 'Parent Change',
	'Class:Incident/Attribute:parent_change_id+' => '',
	'Class:Incident/Attribute:parent_change_ref' => 'Parent-Change-Reference',
	'Class:Incident/Attribute:parent_change_ref+' => '',
	'Class:Incident/Attribute:related_request_list' => 'Child requests~~',
	'Class:Incident/Attribute:related_request_list+' => '~~',
	'Class:Incident/Attribute:child_incidents_list' => 'Afledte Incidents',
	'Class:Incident/Attribute:child_incidents_list+' => '',
	'Class:Incident/Attribute:public_log' => 'Offentlig Log',
	'Class:Incident/Attribute:public_log+' => '',
	'Class:Incident/Attribute:user_satisfaction' => 'Bruger tilfredshed',
	'Class:Incident/Attribute:user_satisfaction+' => '',
	'Class:Incident/Attribute:user_satisfaction/Value:1' => 'Meget tilfreds',
	'Class:Incident/Attribute:user_satisfaction/Value:1+' => '',
	'Class:Incident/Attribute:user_satisfaction/Value:2' => 'Tilfreds',
	'Class:Incident/Attribute:user_satisfaction/Value:2+' => '',
	'Class:Incident/Attribute:user_satisfaction/Value:3' => 'Nogenlunde tilfreds',
	'Class:Incident/Attribute:user_satisfaction/Value:3+' => '',
	'Class:Incident/Attribute:user_satisfaction/Value:4' => 'Meget utilfreds',
	'Class:Incident/Attribute:user_satisfaction/Value:4+' => '',
	'Class:Incident/Attribute:user_comment' => 'Bruger kommentar',
	'Class:Incident/Attribute:user_comment+' => '',
	'Class:Incident/Attribute:parent_incident_id_friendlyname' => 'Parent-Incident-Friendly Name',
	'Class:Incident/Attribute:parent_incident_id_friendlyname+' => '',
	'Class:Incident/Stimulus:ev_assign' => 'Tildelt',
	'Class:Incident/Stimulus:ev_assign+' => '',
	'Class:Incident/Stimulus:ev_reassign' => 'Forny tildeling',
	'Class:Incident/Stimulus:ev_reassign+' => '',
	'Class:Incident/Stimulus:ev_pending' => 'Afventer',
	'Class:Incident/Stimulus:ev_pending+' => '',
	'Class:Incident/Stimulus:ev_timeout' => 'Timeout',
	'Class:Incident/Stimulus:ev_timeout+' => '',
	'Class:Incident/Stimulus:ev_autoresolve' => 'Automatisk løst',
	'Class:Incident/Stimulus:ev_autoresolve+' => '',
	'Class:Incident/Stimulus:ev_autoclose' => 'Automatisk lukket',
	'Class:Incident/Stimulus:ev_autoclose+' => '',
	'Class:Incident/Stimulus:ev_resolve' => 'Marker som løst',
	'Class:Incident/Stimulus:ev_resolve+' => '',
	'Class:Incident/Stimulus:ev_close' => 'Luk denne Request',
	'Class:Incident/Stimulus:ev_close+' => '',
	'Class:Incident/Stimulus:ev_reopen' => 'Genåben',
	'Class:Incident/Stimulus:ev_reopen+' => '',
	'Class:Incident/Error:CannotAssignParentIncidentIdToSelf' => 'Cannot assign the Parent incident to the incident itself~~',

	'Class:Incident/Method:ResolveChildTickets' => 'ResolveChildTickets~~',
	'Class:Incident/Method:ResolveChildTickets+' => 'Cascade the resolution to child ticket (ev_autoresolve), and align the following characteristics: service, team, agent, resolution info~~',
	'Tickets:Related:OpenIncidents' => 'Open incidents~~',
));

//
// Class: Incident
//

Dict::Add('DA DA', 'Danish', 'Dansk', array(
	'Class:Incident/Attribute:parent_problem_id' => 'Parent problem id~~',
	'Class:Incident/Attribute:parent_problem_id+' => '~~',
	'Class:Incident/Attribute:parent_problem_ref' => 'Parent problem ref~~',
	'Class:Incident/Attribute:parent_problem_ref+' => '~~',
));
