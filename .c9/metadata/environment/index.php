{"filter":false,"title":"index.php","tooltip":"/index.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":117,"column":14},"end":{"row":117,"column":15},"action":"remove","lines":["\""],"id":309},{"start":{"row":117,"column":13},"end":{"row":117,"column":14},"action":"remove","lines":["\""]}],[{"start":{"row":117,"column":13},"end":{"row":117,"column":26},"action":"insert","lines":["date(\"Y/m/d\")"],"id":310}],[{"start":{"row":116,"column":16},"end":{"row":116,"column":17},"action":"remove","lines":["\""],"id":311},{"start":{"row":116,"column":15},"end":{"row":116,"column":16},"action":"remove","lines":["\""]}],[{"start":{"row":116,"column":15},"end":{"row":116,"column":16},"action":"insert","lines":["$"],"id":312},{"start":{"row":116,"column":16},"end":{"row":116,"column":17},"action":"insert","lines":["S"]}],[{"start":{"row":116,"column":16},"end":{"row":116,"column":17},"action":"remove","lines":["S"],"id":313}],[{"start":{"row":116,"column":16},"end":{"row":116,"column":17},"action":"insert","lines":["_"],"id":314},{"start":{"row":116,"column":17},"end":{"row":116,"column":18},"action":"insert","lines":["S"]},{"start":{"row":116,"column":18},"end":{"row":116,"column":19},"action":"insert","lines":["E"]},{"start":{"row":116,"column":19},"end":{"row":116,"column":20},"action":"insert","lines":["S"]}],[{"start":{"row":116,"column":15},"end":{"row":116,"column":20},"action":"remove","lines":["$_SES"],"id":315},{"start":{"row":116,"column":15},"end":{"row":116,"column":24},"action":"insert","lines":["$_SESSION"]}],[{"start":{"row":116,"column":24},"end":{"row":116,"column":26},"action":"insert","lines":["[]"],"id":316}],[{"start":{"row":116,"column":25},"end":{"row":116,"column":27},"action":"insert","lines":["''"],"id":317}],[{"start":{"row":116,"column":26},"end":{"row":116,"column":31},"action":"insert","lines":["email"],"id":318}],[{"start":{"row":118,"column":13},"end":{"row":118,"column":15},"action":"remove","lines":["\"\""],"id":319},{"start":{"row":118,"column":13},"end":{"row":118,"column":26},"action":"insert","lines":["date(\"Y/m/d\")"]}],[{"start":{"row":93,"column":1},"end":{"row":94,"column":0},"action":"insert","lines":["",""],"id":320},{"start":{"row":94,"column":0},"end":{"row":95,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":95,"column":0},"end":{"row":123,"column":1},"action":"insert","lines":["# Display all open issues","if(isset($_GET['display_issues_open'])){","   echo \" <table>\";","        echo \"<tr>\";","        echo \"    <th>Title</th>\";","        echo \"    <th>Type</th>\";","        echo \"    <th>Status</th>\";","        echo \"    <th>Assigned To</th>\";","        echo \"    <th>Created</th>\";","        echo \"  </tr>\";","    foreach ($issueslist as $issue):","        if (strcmp($issue['status'], 'OPEN') == 0){","        $id=$issue['id'];","        $title=$issue['title'];","        $type=$issue['type'];","        $status=$issue['status'];","        $assigned_to=$issue['assigned_to'];","        $created=$issue['created'];","        echo \"<tr>\";","        echo \"    <th>$id.$title</th>\";","        echo \"    <th>$type</th>\";","        echo \"    <th>$status</th>\";","        echo \"    <th>$assigned_to</th>\";","        echo \"    <th>$created</th>\";","        echo \"  </tr>\";","        }","    endforeach;","    echo \"</table>\";","}"],"id":321}],[{"start":{"row":95,"column":14},"end":{"row":95,"column":25},"action":"remove","lines":["open issues"],"id":322}],[{"start":{"row":95,"column":14},"end":{"row":95,"column":15},"action":"insert","lines":["m"],"id":323},{"start":{"row":95,"column":15},"end":{"row":95,"column":16},"action":"insert","lines":["y"]}],[{"start":{"row":95,"column":16},"end":{"row":95,"column":17},"action":"insert","lines":[" "],"id":324},{"start":{"row":95,"column":17},"end":{"row":95,"column":18},"action":"insert","lines":["t"]},{"start":{"row":95,"column":18},"end":{"row":95,"column":19},"action":"insert","lines":["i"]},{"start":{"row":95,"column":19},"end":{"row":95,"column":20},"action":"insert","lines":["c"]},{"start":{"row":95,"column":20},"end":{"row":95,"column":21},"action":"insert","lines":["k"]},{"start":{"row":95,"column":21},"end":{"row":95,"column":22},"action":"insert","lines":["e"]},{"start":{"row":95,"column":22},"end":{"row":95,"column":23},"action":"insert","lines":["t"]},{"start":{"row":95,"column":23},"end":{"row":95,"column":24},"action":"insert","lines":["s"]}],[{"start":{"row":106,"column":27},"end":{"row":106,"column":33},"action":"remove","lines":["status"],"id":325},{"start":{"row":106,"column":27},"end":{"row":106,"column":28},"action":"insert","lines":["e"]},{"start":{"row":106,"column":28},"end":{"row":106,"column":29},"action":"insert","lines":["m"]},{"start":{"row":106,"column":29},"end":{"row":106,"column":30},"action":"insert","lines":["a"]},{"start":{"row":106,"column":30},"end":{"row":106,"column":31},"action":"insert","lines":["i"]},{"start":{"row":106,"column":31},"end":{"row":106,"column":32},"action":"insert","lines":["l"]}],[{"start":{"row":106,"column":36},"end":{"row":106,"column":42},"action":"remove","lines":["'OPEN'"],"id":326},{"start":{"row":106,"column":36},"end":{"row":106,"column":37},"action":"insert","lines":["$"]},{"start":{"row":106,"column":37},"end":{"row":106,"column":38},"action":"insert","lines":["_"]},{"start":{"row":106,"column":38},"end":{"row":106,"column":39},"action":"insert","lines":["S"]},{"start":{"row":106,"column":39},"end":{"row":106,"column":40},"action":"insert","lines":["E"]}],[{"start":{"row":106,"column":36},"end":{"row":106,"column":40},"action":"remove","lines":["$_SE"],"id":329},{"start":{"row":106,"column":36},"end":{"row":106,"column":37},"action":"insert","lines":["S"]}],[{"start":{"row":106,"column":36},"end":{"row":106,"column":37},"action":"remove","lines":["S"],"id":330}],[{"start":{"row":106,"column":36},"end":{"row":106,"column":37},"action":"insert","lines":["@"],"id":331}],[{"start":{"row":106,"column":36},"end":{"row":106,"column":37},"action":"remove","lines":["@"],"id":332}],[{"start":{"row":106,"column":36},"end":{"row":106,"column":37},"action":"insert","lines":["#"],"id":333}],[{"start":{"row":106,"column":36},"end":{"row":106,"column":37},"action":"remove","lines":["#"],"id":334}],[{"start":{"row":106,"column":36},"end":{"row":106,"column":37},"action":"insert","lines":["$"],"id":335},{"start":{"row":106,"column":37},"end":{"row":106,"column":38},"action":"insert","lines":["S"]}],[{"start":{"row":106,"column":37},"end":{"row":106,"column":38},"action":"remove","lines":["S"],"id":336}],[{"start":{"row":106,"column":37},"end":{"row":106,"column":38},"action":"insert","lines":["_"],"id":337},{"start":{"row":106,"column":38},"end":{"row":106,"column":39},"action":"insert","lines":["S"]},{"start":{"row":106,"column":39},"end":{"row":106,"column":40},"action":"insert","lines":["E"]}],[{"start":{"row":106,"column":40},"end":{"row":106,"column":41},"action":"insert","lines":["S"],"id":339}],[{"start":{"row":106,"column":36},"end":{"row":106,"column":41},"action":"remove","lines":["$_SES"],"id":340},{"start":{"row":106,"column":36},"end":{"row":106,"column":45},"action":"insert","lines":["$_SESSION"]}],[{"start":{"row":106,"column":45},"end":{"row":106,"column":47},"action":"insert","lines":["[]"],"id":341}],[{"start":{"row":106,"column":46},"end":{"row":106,"column":48},"action":"insert","lines":["''"],"id":342}],[{"start":{"row":106,"column":47},"end":{"row":106,"column":48},"action":"insert","lines":["e"],"id":343},{"start":{"row":106,"column":48},"end":{"row":106,"column":49},"action":"insert","lines":["m"]},{"start":{"row":106,"column":49},"end":{"row":106,"column":50},"action":"insert","lines":["a"]},{"start":{"row":106,"column":50},"end":{"row":106,"column":51},"action":"insert","lines":["i"]},{"start":{"row":106,"column":51},"end":{"row":106,"column":52},"action":"insert","lines":["l"]}],[{"start":{"row":106,"column":47},"end":{"row":106,"column":52},"action":"remove","lines":["email"],"id":344},{"start":{"row":106,"column":47},"end":{"row":106,"column":52},"action":"insert","lines":["email"]}],[{"start":{"row":96,"column":31},"end":{"row":96,"column":35},"action":"remove","lines":["open"],"id":345},{"start":{"row":96,"column":31},"end":{"row":96,"column":32},"action":"insert","lines":["t"]}],[{"start":{"row":96,"column":31},"end":{"row":96,"column":32},"action":"remove","lines":["t"],"id":346}],[{"start":{"row":96,"column":31},"end":{"row":96,"column":32},"action":"insert","lines":["t"],"id":347},{"start":{"row":96,"column":32},"end":{"row":96,"column":33},"action":"insert","lines":["i"]},{"start":{"row":96,"column":33},"end":{"row":96,"column":34},"action":"insert","lines":["c"]},{"start":{"row":96,"column":34},"end":{"row":96,"column":35},"action":"insert","lines":["k"]},{"start":{"row":96,"column":35},"end":{"row":96,"column":36},"action":"insert","lines":["e"]},{"start":{"row":96,"column":36},"end":{"row":96,"column":37},"action":"insert","lines":["t"]},{"start":{"row":96,"column":37},"end":{"row":96,"column":38},"action":"insert","lines":["s"]}],[{"start":{"row":138,"column":28},"end":{"row":139,"column":0},"action":"insert","lines":["",""],"id":349}],[{"start":{"row":139,"column":31},"end":{"row":140,"column":0},"action":"insert","lines":["",""],"id":350}],[{"start":{"row":140,"column":30},"end":{"row":141,"column":0},"action":"insert","lines":["",""],"id":351}],[{"start":{"row":141,"column":20},"end":{"row":142,"column":0},"action":"remove","lines":["",""],"id":352}],[{"start":{"row":141,"column":23},"end":{"row":142,"column":0},"action":"insert","lines":["",""],"id":353}],[{"start":{"row":126,"column":32},"end":{"row":127,"column":0},"action":"insert","lines":["",""],"id":354}],[{"start":{"row":127,"column":28},"end":{"row":128,"column":0},"action":"insert","lines":["",""],"id":355}],[{"start":{"row":128,"column":28},"end":{"row":129,"column":0},"action":"insert","lines":["",""],"id":356}],[{"start":{"row":12,"column":28},"end":{"row":13,"column":0},"action":"insert","lines":["",""],"id":357}],[{"start":{"row":107,"column":27},"end":{"row":107,"column":32},"action":"remove","lines":["email"],"id":358},{"start":{"row":107,"column":27},"end":{"row":107,"column":28},"action":"insert","lines":["c"]},{"start":{"row":107,"column":28},"end":{"row":107,"column":29},"action":"insert","lines":["r"]},{"start":{"row":107,"column":29},"end":{"row":107,"column":30},"action":"insert","lines":["e"]},{"start":{"row":107,"column":30},"end":{"row":107,"column":31},"action":"insert","lines":["a"]},{"start":{"row":107,"column":31},"end":{"row":107,"column":32},"action":"insert","lines":["t"]},{"start":{"row":107,"column":32},"end":{"row":107,"column":33},"action":"insert","lines":["e"]},{"start":{"row":107,"column":33},"end":{"row":107,"column":34},"action":"insert","lines":["d"]},{"start":{"row":107,"column":34},"end":{"row":107,"column":35},"action":"insert","lines":["_"]},{"start":{"row":107,"column":35},"end":{"row":107,"column":36},"action":"insert","lines":["b"]}],[{"start":{"row":107,"column":36},"end":{"row":107,"column":37},"action":"insert","lines":["y"],"id":359}],[{"start":{"row":135,"column":18},"end":{"row":135,"column":22},"action":"remove","lines":["Test"],"id":360},{"start":{"row":135,"column":17},"end":{"row":135,"column":19},"action":"remove","lines":["\"\""]}],[{"start":{"row":135,"column":17},"end":{"row":135,"column":31},"action":"insert","lines":["date(\"Y/m/d\");"],"id":361}],[{"start":{"row":10,"column":0},"end":{"row":11,"column":0},"action":"insert","lines":["",""],"id":362},{"start":{"row":11,"column":0},"end":{"row":12,"column":0},"action":"insert","lines":["",""]},{"start":{"row":12,"column":0},"end":{"row":12,"column":1},"action":"insert","lines":[" "]}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":1},"action":"remove","lines":[" "],"id":363}],[{"start":{"row":11,"column":0},"end":{"row":11,"column":1},"action":"insert","lines":["#"],"id":364},{"start":{"row":11,"column":1},"end":{"row":11,"column":2},"action":"insert","lines":["S"]},{"start":{"row":11,"column":2},"end":{"row":11,"column":3},"action":"insert","lines":["e"]},{"start":{"row":11,"column":3},"end":{"row":11,"column":4},"action":"insert","lines":["s"]},{"start":{"row":11,"column":4},"end":{"row":11,"column":5},"action":"insert","lines":["s"]},{"start":{"row":11,"column":5},"end":{"row":11,"column":6},"action":"insert","lines":["i"]},{"start":{"row":11,"column":6},"end":{"row":11,"column":7},"action":"insert","lines":["o"]}],[{"start":{"row":11,"column":7},"end":{"row":11,"column":8},"action":"insert","lines":["n"],"id":365}],[{"start":{"row":11,"column":8},"end":{"row":12,"column":0},"action":"insert","lines":["",""],"id":366},{"start":{"row":12,"column":0},"end":{"row":12,"column":1},"action":"insert","lines":["i"]},{"start":{"row":12,"column":1},"end":{"row":12,"column":2},"action":"insert","lines":["f"]}],[{"start":{"row":12,"column":2},"end":{"row":12,"column":3},"action":"insert","lines":[" "],"id":367}],[{"start":{"row":12,"column":3},"end":{"row":12,"column":5},"action":"insert","lines":["()"],"id":368}],[{"start":{"row":12,"column":4},"end":{"row":12,"column":15},"action":"insert","lines":["isset($_GET"],"id":369}],[{"start":{"row":12,"column":15},"end":{"row":12,"column":17},"action":"insert","lines":["[]"],"id":370}],[{"start":{"row":12,"column":18},"end":{"row":12,"column":19},"action":"insert","lines":["{"],"id":371},{"start":{"row":12,"column":19},"end":{"row":12,"column":20},"action":"insert","lines":["}"]}],[{"start":{"row":12,"column":19},"end":{"row":14,"column":0},"action":"insert","lines":["","    ",""],"id":372}],[{"start":{"row":12,"column":16},"end":{"row":12,"column":18},"action":"insert","lines":["''"],"id":373}],[{"start":{"row":12,"column":17},"end":{"row":12,"column":18},"action":"insert","lines":["s"],"id":374},{"start":{"row":12,"column":18},"end":{"row":12,"column":19},"action":"insert","lines":["e"]},{"start":{"row":12,"column":19},"end":{"row":12,"column":20},"action":"insert","lines":["s"]},{"start":{"row":12,"column":20},"end":{"row":12,"column":21},"action":"insert","lines":["s"]},{"start":{"row":12,"column":21},"end":{"row":12,"column":22},"action":"insert","lines":["i"]},{"start":{"row":12,"column":22},"end":{"row":12,"column":23},"action":"insert","lines":["o"]},{"start":{"row":12,"column":23},"end":{"row":12,"column":24},"action":"insert","lines":["n"]},{"start":{"row":12,"column":24},"end":{"row":12,"column":25},"action":"insert","lines":["s"]}],[{"start":{"row":12,"column":0},"end":{"row":15,"column":0},"action":"remove","lines":["if (isset($_GET['sessions']){","    ","}",""],"id":375}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":1},"action":"insert","lines":["i"],"id":376},{"start":{"row":12,"column":1},"end":{"row":12,"column":2},"action":"insert","lines":["f"]}],[{"start":{"row":12,"column":2},"end":{"row":12,"column":3},"action":"insert","lines":[" "],"id":377}],[{"start":{"row":12,"column":3},"end":{"row":12,"column":5},"action":"insert","lines":["()"],"id":378}],[{"start":{"row":12,"column":4},"end":{"row":12,"column":5},"action":"remove","lines":[")"],"id":379},{"start":{"row":12,"column":3},"end":{"row":12,"column":4},"action":"remove","lines":["("]},{"start":{"row":12,"column":2},"end":{"row":12,"column":3},"action":"remove","lines":[" "]}],[{"start":{"row":12,"column":2},"end":{"row":12,"column":4},"action":"insert","lines":["()"],"id":380}],[{"start":{"row":12,"column":3},"end":{"row":12,"column":4},"action":"insert","lines":["u"],"id":381}],[{"start":{"row":12,"column":3},"end":{"row":12,"column":4},"action":"remove","lines":["u"],"id":382}],[{"start":{"row":12,"column":3},"end":{"row":12,"column":4},"action":"insert","lines":["i"],"id":383},{"start":{"row":12,"column":4},"end":{"row":12,"column":5},"action":"insert","lines":["s"]},{"start":{"row":12,"column":5},"end":{"row":12,"column":6},"action":"insert","lines":["s"]},{"start":{"row":12,"column":6},"end":{"row":12,"column":7},"action":"insert","lines":["e"]},{"start":{"row":12,"column":7},"end":{"row":12,"column":8},"action":"insert","lines":["t"]}],[{"start":{"row":12,"column":8},"end":{"row":12,"column":10},"action":"insert","lines":["()"],"id":384}],[{"start":{"row":12,"column":9},"end":{"row":12,"column":10},"action":"insert","lines":["?"],"id":385}],[{"start":{"row":12,"column":9},"end":{"row":12,"column":10},"action":"remove","lines":["?"],"id":386}],[{"start":{"row":12,"column":9},"end":{"row":12,"column":10},"action":"insert","lines":["$"],"id":387},{"start":{"row":12,"column":10},"end":{"row":12,"column":11},"action":"insert","lines":["_"]},{"start":{"row":12,"column":11},"end":{"row":12,"column":12},"action":"insert","lines":["G"]}],[{"start":{"row":12,"column":9},"end":{"row":12,"column":12},"action":"remove","lines":["$_G"],"id":388},{"start":{"row":12,"column":9},"end":{"row":12,"column":14},"action":"insert","lines":["$_GET"]}],[{"start":{"row":12,"column":14},"end":{"row":12,"column":16},"action":"insert","lines":["[]"],"id":389}],[{"start":{"row":12,"column":15},"end":{"row":12,"column":17},"action":"insert","lines":["''"],"id":390}],[{"start":{"row":12,"column":16},"end":{"row":12,"column":17},"action":"insert","lines":["s"],"id":391},{"start":{"row":12,"column":17},"end":{"row":12,"column":18},"action":"insert","lines":["e"]},{"start":{"row":12,"column":18},"end":{"row":12,"column":19},"action":"insert","lines":["s"]},{"start":{"row":12,"column":19},"end":{"row":12,"column":20},"action":"insert","lines":["s"]},{"start":{"row":12,"column":20},"end":{"row":12,"column":21},"action":"insert","lines":["i"]},{"start":{"row":12,"column":21},"end":{"row":12,"column":22},"action":"insert","lines":["o"]},{"start":{"row":12,"column":22},"end":{"row":12,"column":23},"action":"insert","lines":["n"]},{"start":{"row":12,"column":23},"end":{"row":12,"column":24},"action":"insert","lines":["s"]}],[{"start":{"row":12,"column":23},"end":{"row":12,"column":24},"action":"remove","lines":["s"],"id":392}],[{"start":{"row":12,"column":27},"end":{"row":12,"column":29},"action":"insert","lines":["[]"],"id":393}],[{"start":{"row":12,"column":27},"end":{"row":12,"column":29},"action":"remove","lines":["[]"],"id":394}],[{"start":{"row":12,"column":27},"end":{"row":12,"column":28},"action":"insert","lines":["{"],"id":395},{"start":{"row":12,"column":28},"end":{"row":12,"column":29},"action":"insert","lines":["}"]}],[{"start":{"row":12,"column":28},"end":{"row":14,"column":0},"action":"insert","lines":["","    ",""],"id":396}],[{"start":{"row":12,"column":23},"end":{"row":12,"column":24},"action":"insert","lines":["s"],"id":397}],[{"start":{"row":13,"column":4},"end":{"row":13,"column":5},"action":"insert","lines":["e"],"id":398},{"start":{"row":13,"column":5},"end":{"row":13,"column":6},"action":"insert","lines":["c"]},{"start":{"row":13,"column":6},"end":{"row":13,"column":7},"action":"insert","lines":["h"]},{"start":{"row":13,"column":7},"end":{"row":13,"column":8},"action":"insert","lines":["o"]}],[{"start":{"row":13,"column":8},"end":{"row":13,"column":9},"action":"insert","lines":[" "],"id":399}],[{"start":{"row":12,"column":23},"end":{"row":12,"column":24},"action":"remove","lines":["s"],"id":400}],[{"start":{"row":12,"column":23},"end":{"row":12,"column":24},"action":"insert","lines":["i"],"id":401},{"start":{"row":12,"column":24},"end":{"row":12,"column":25},"action":"insert","lines":["d"]}],[{"start":{"row":12,"column":23},"end":{"row":12,"column":24},"action":"insert","lines":["_"],"id":402}],[{"start":{"row":13,"column":9},"end":{"row":13,"column":10},"action":"insert","lines":["@"],"id":403}],[{"start":{"row":13,"column":9},"end":{"row":13,"column":10},"action":"remove","lines":["@"],"id":404}],[{"start":{"row":13,"column":9},"end":{"row":13,"column":10},"action":"insert","lines":["$"],"id":405},{"start":{"row":13,"column":10},"end":{"row":13,"column":11},"action":"insert","lines":["s"]},{"start":{"row":13,"column":11},"end":{"row":13,"column":12},"action":"insert","lines":["e"]}],[{"start":{"row":13,"column":11},"end":{"row":13,"column":12},"action":"remove","lines":["e"],"id":406},{"start":{"row":13,"column":10},"end":{"row":13,"column":11},"action":"remove","lines":["s"]}],[{"start":{"row":13,"column":10},"end":{"row":13,"column":11},"action":"insert","lines":["_"],"id":407},{"start":{"row":13,"column":11},"end":{"row":13,"column":12},"action":"insert","lines":["S"]},{"start":{"row":13,"column":12},"end":{"row":13,"column":13},"action":"insert","lines":["E"]}],[{"start":{"row":13,"column":9},"end":{"row":13,"column":13},"action":"remove","lines":["$_SE"],"id":408},{"start":{"row":13,"column":9},"end":{"row":13,"column":18},"action":"insert","lines":["$_SESSION"]}],[{"start":{"row":13,"column":18},"end":{"row":13,"column":20},"action":"insert","lines":["[]"],"id":409}],[{"start":{"row":13,"column":19},"end":{"row":13,"column":21},"action":"insert","lines":["''"],"id":410}],[{"start":{"row":13,"column":20},"end":{"row":13,"column":21},"action":"insert","lines":["i"],"id":411},{"start":{"row":13,"column":21},"end":{"row":13,"column":22},"action":"insert","lines":["d"]}],[{"start":{"row":13,"column":24},"end":{"row":13,"column":25},"action":"insert","lines":[";"],"id":412}],[{"start":{"row":14,"column":1},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":413}],[{"start":{"row":19,"column":24},"end":{"row":19,"column":34},"action":"remove","lines":["session_id"],"id":431},{"start":{"row":19,"column":24},"end":{"row":19,"column":25},"action":"insert","lines":["i"]},{"start":{"row":19,"column":25},"end":{"row":19,"column":26},"action":"insert","lines":["d"]}],[{"start":{"row":19,"column":13},"end":{"row":19,"column":18},"action":"remove","lines":["$_GET"],"id":430},{"start":{"row":19,"column":13},"end":{"row":19,"column":22},"action":"insert","lines":["$_SESSION"]}],[{"start":{"row":19,"column":35},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":429},{"start":{"row":20,"column":0},"end":{"row":20,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":29,"column":4},"end":{"row":29,"column":5},"action":"insert","lines":["}"],"id":428}],[{"start":{"row":29,"column":0},"end":{"row":29,"column":4},"action":"insert","lines":["    "],"id":427}],[{"start":{"row":28,"column":4},"end":{"row":28,"column":8},"action":"insert","lines":["    "],"id":426}],[{"start":{"row":27,"column":4},"end":{"row":27,"column":8},"action":"insert","lines":["    "],"id":425}],[{"start":{"row":26,"column":8},"end":{"row":26,"column":12},"action":"insert","lines":["    "],"id":424}],[{"start":{"row":25,"column":8},"end":{"row":25,"column":12},"action":"insert","lines":["    "],"id":423}],[{"start":{"row":24,"column":8},"end":{"row":24,"column":12},"action":"insert","lines":["    "],"id":422}],[{"start":{"row":23,"column":8},"end":{"row":23,"column":12},"action":"insert","lines":["    "],"id":421}],[{"start":{"row":22,"column":8},"end":{"row":22,"column":12},"action":"insert","lines":["    "],"id":420}],[{"start":{"row":21,"column":4},"end":{"row":21,"column":8},"action":"insert","lines":["    "],"id":419}],[{"start":{"row":20,"column":4},"end":{"row":20,"column":8},"action":"insert","lines":["    "],"id":418}],[{"start":{"row":19,"column":4},"end":{"row":19,"column":35},"action":"insert","lines":["if(isset($_GET['session_id'])){"],"id":417}],[{"start":{"row":19,"column":5},"end":{"row":19,"column":6},"action":"remove","lines":["f"],"id":416},{"start":{"row":19,"column":4},"end":{"row":19,"column":5},"action":"remove","lines":["i"]}],[{"start":{"row":19,"column":5},"end":{"row":19,"column":6},"action":"insert","lines":["f"],"id":415}],[{"start":{"row":18,"column":26},"end":{"row":19,"column":0},"action":"insert","lines":["",""],"id":414},{"start":{"row":19,"column":0},"end":{"row":19,"column":4},"action":"insert","lines":["    "]},{"start":{"row":19,"column":4},"end":{"row":19,"column":5},"action":"insert","lines":["i"]}]]},"ace":{"folds":[{"start":{"row":12,"column":31},"end":{"row":14,"column":0},"placeholder":"..."},{"start":{"row":18,"column":26},"end":{"row":29,"column":1},"placeholder":"..."},{"start":{"row":32,"column":34},"end":{"row":40,"column":1},"placeholder":"..."},{"start":{"row":43,"column":35},"end":{"row":69,"column":0},"placeholder":"..."},{"start":{"row":72,"column":40},"end":{"row":99,"column":0},"placeholder":"..."},{"start":{"row":102,"column":43},"end":{"row":129,"column":0},"placeholder":"..."},{"start":{"row":135,"column":23},"end":{"row":144,"column":0},"placeholder":"..."},{"start":{"row":151,"column":26},"end":{"row":165,"column":0},"placeholder":"..."},{"start":{"row":168,"column":27},"end":{"row":173,"column":0},"placeholder":"..."}],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":18,"column":10},"end":{"row":18,"column":10},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1575241187189,"hash":"b6749d9a653362517cf3b8d166c9103c9e7b2d81"}