<div class="modal-header">
    <h4 class="modal-title">Character Summary</h4>
</div>
<div class="modal-body">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="#general" role="tab" data-toggle="tab">General</a></li>
        <li><a href="#features" role="tab" data-toggle="tab">Features</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" id="general">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-condensed">
                        <tr>
                            <th>Name: </th>
                            <td>{{character.name}}</td>
                        </tr>
                        <tr>
                            <th>Level: </th>
                            <td>{{character.level}}</td>
                        </tr>
                        <tr>
                            <th>Race: </th>
                            <td>{{character.raceObj.subrace.name}}</td>
                        </tr>
                        <tr>
                            <th>Background: </th>
                            <td>{{character.background.name}}</td>
                        </tr>
                        <tr>
                            <th>Class: </th>
                            <td>{{character.classObj.name}} <span ng-show="character.classObj.subclassObj.name">({{character.classObj.subclassObj.name}})</span></td>
                        </tr>
                        <tr>
                            <th>Armor Class: </th>
                            <td>{{character.armorClass}}</td>
                        </tr>
                        <tr>
                            <th>Initiative: </th>
                            <td>{{character.initiative}}</td>
                        </tr>
                        <tr>
                            <th>Speed: </th>
                            <td>{{character.speed}}</td>
                        </tr>
                        <tr>
                            <th>Hit Points: </th>
                            <td>{{character.hitPoints}}</td>
                        </tr>
                        <tr>
                            <th>Proficiency Bonus: </th>
                            <td>{{character.profBonus}}</td>
                        </tr>
                        <tr ng-if="character.armor != 'None'">
                            <th>Armor Proficiencies: </th>
                            <td>{{character.armor}}</td>
                        </tr>
                        <tr>
                            <th>Weapon Proficiencies: </th>
                            <td>{{character.weapons}}</td>
                        </tr>
                        <tr ng-if="character.tools">
                            <th>Tool Proficiencies: </th>
                            <td>{{character.tools}}</td>
                        </tr>
                        <tr>
                            <th>Languages: </th>
                            <td>{{character.languages}}</td>
                        </tr>
                        <tr>
                            <th>Skills: </th>
                            <td>
                                <ul class="list-inline">
                                    <li ng-repeat="skill in character.skillsArr">{{skill}}</li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <table id="abilitySummary" class="table table-bordered table-striped table-condensed">
                            <thead>
                            <tr>
                                <th>Ability</th>
                                <th>Score</th>
                                <th>Mod</th>
                                <th><abbr title="Saving Throw">ST</abbr></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Strength</td>
                                <td>{{character.ability.str.score}}</td>
                                <td>{{character.ability.str.mod}}</td>
                                <td>{{character.ability.str.savingThrow}}</td>
                            </tr>
                            <tr>
                                <td>Dexterity</td>
                                <td>{{character.ability.dex.score}}</td>
                                <td>{{character.ability.dex.mod}}</td>
                                <td>{{character.ability.dex.savingThrow}}</td>
                            </tr>
                            <tr>
                                <td>Constitution</td>
                                <td>{{character.ability.con.score}}</td>
                                <td>{{character.ability.con.mod}}</td>
                                <td>{{character.ability.con.savingThrow}}</td>
                            </tr>
                            <tr>
                                <td>Intelligence</td>
                                <td>{{character.ability.int.score}}</td>
                                <td>{{character.ability.int.mod}}</td>
                                <td>{{character.ability.int.savingThrow}}</td>
                            </tr>
                            <tr>
                                <td>Wisdom</td>
                                <td>{{character.ability.wis.score}}</td>
                                <td>{{character.ability.wis.mod}}</td>
                                <td>{{character.ability.wis.savingThrow}}</td>
                            </tr>
                            <tr>
                                <td>Charisma</td>
                                <td>{{character.ability.cha.score}}</td>
                                <td>{{character.ability.cha.mod}}</td>
                                <td>{{character.ability.cha.savingThrow}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row" ng-show="character.classObj.spellcasting">
                        <table class="table table-condensed">
                            <h4>Spellcasting</h4>
                            <tr>
                                <th>Spellcasting Ability: </th>
                                <td>{{character.classObj.spellcasting.spellAbility}}</td>
                            </tr>
                            <tr>
                                <th>Spell Save DC: </th>
                                <td>{{character.classObj.spellcasting.spellSaveDC}}</td>
                            </tr>
                            <tr>
                                <th>Spell Attack Bonus: </th>
                                <td>{{character.classObj.spellcasting.spellAttkBonus}}</td>
                            </tr>
                            <tr>
                                <th>Cantrips: </th>
                                <td>{{character.classObj.selectedCantrips}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="features">
            <div class="row">
                <div class="col-md-4"> <!-- racial traits -->
                    <h4>Racial Traits</h4>
                    <dl>
                        <div ng-repeat="racialTrait in character.raceObj.racialTraits">
                            <dt>{{racialTrait.name}}</dt>
                            <dd ng-bind-html="racialTrait.benefit"></dd>
                        </div>
                    </dl>
                </div>
                <div class="col-md-4"> <!-- class features -->
                    <h4>Class Features</h4>
                    <dl>
                        <div ng-repeat="classFeature in character.classObj.classFeatures">
                            <dt>{{classFeature.name}}</dt>
                            <dd ng-bind-html="classFeature.benefit"></dd>
                        </div>
                    </dl>
                </div>
                <div class="col-md-4"> <!-- background feature -->
                    <h4>Background Feature</h4>
                    <dl>
                        <dt>{{character.background.name}}</dt>
                        <dd>{{character.background.desc}}</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button ng-click="close()" class="btn btn-default">Close</button>
</div>