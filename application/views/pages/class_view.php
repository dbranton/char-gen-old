<?php
    echo '<p>' . $class['desc'] . '</p>';?>
    <h4>Hit Points</h4>
    <ul>
        <li><b>Hit Dice</b>: 1d<?php echo $class['hit_dice']; ?> per <?php echo $class['name']; ?> level</li>
        <li><b>Hit Points at 1st</b>: <?php echo $class['hit_dice']; ?> + your Constitution modifier</li>
        <li><b>Weapon Proficiencies</b>: 1d<?php echo $class['hit_dice']; ?> + your Constitution modifier per <?php echo $class['name']; ?> level after 1st</li>
    </ul>
    <h4>Proficiencies</h4>
    <ul>
        <li><b>Armor</b>: <?php echo $class['armor_prof']; ?></li>
        <li><b>Weapons</b>: <?php echo $class['weapon_prof']; ?></li>
        <li><b>Tools</b>: <?php echo $class['tools']; ?></li>
        <li><b>Saving Throws</b>: <?php echo $class['saving_throws']; ?></li>
        <li><b>Skills</b>: <?php echo $class['avail_skills_desc']; ?></li>
    </ul>
<?php
    if (is_array($class['features'])) {
        foreach ($class['features'] as $featureId => $class_feature) {
            echo '<h3>' . $class_feature['name'] . '</h3>';
            echo '<p>' . $class_feature['desc'] . '</p>';
            //echo '<p>' . $class_feature['benefit'] . '</p>';
            if (isset($class_feature['subclasses']) && is_array($class_feature['subclasses'])) {
                echo '<div>';
                foreach ($class_feature['subclasses'] as $subclassName => $subclassArray) {
                    echo '<h4>' . $subclassArray['name'] . '</h4>';
                    echo '<div>';
                    echo '<p>' . $subclassArray['desc'] . '</p>';
                    echo '<ul>';
                    /*if ($subclassArray['align'] !== '') {
                        echo '<li><b>Alignment</b>: ' . $subclassArray['align'] . '</li>';
                    }*/
                    if ($subclassArray['armor_prof'] !== '') {
                        echo '<li><b>Armor and Shield Proficiencies</b>: ' . $subclassArray['armor_prof'] . '</li>';
                    }
                    if (is_array($subclassArray['benefit'])) {
                        foreach ($subclassArray['benefit'] as $name => $abilityInfo) {
                            echo '<li><b>' . $abilityInfo['name'] . '</b>: ' . $abilityInfo['desc'] . '</li>';
                        }
                    }
                    echo '</ul>';
                    echo '</div>';
                }
                echo '</div>';  // end accordion div
            }
            if (isset($class_feature['subfeatures']) && is_array($class_feature['subfeatures'])) {
                echo '<ul>';
                foreach ($class_feature['subfeatures'] as $id => $subfeature) {
                    echo '<li><i>' . $subfeature['name'] . '</i>: ' . $subfeature['desc'] . '</li>';
                }
                echo '</ul>';
            }
        }
    }

?>