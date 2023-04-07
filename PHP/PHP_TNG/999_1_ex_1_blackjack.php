<?php
//블랙잭 게임
//-카드 숫자를 합쳐 가능한 21에 가깝게 만들면 이기는 게임

//1. 게임 시작시 유저와 딜러는 카드를 2개 받는다.
// 1-1. 이때 유저 또는 딜러의 카드 합이 21이면 결과 출력 
//2. 카드 합이 21을 초과하면 패배
// 2-1. 유저 또는 딜러의 카드의 합이 21이 넘으면 결과 바로 출력
//4. 카드의 계산은 아래의 규칙을 따른다.
// 4-1.카드 2~9는 그 숫자대로 점수
// 4-2. K·Q·J,10은 10점
// 4-3. A는 1점 또는 11점 둘 중의 하나로 계산
//5. 카드의 합이 같으면 다음의 규칙에 따름
// 5-1. 카드수가 적은 쪽이 승리
// 5-2. 카드수가 같을경우 무승부
//6. 유저가 카드를 받을 때 딜러는 아래의 규칙을 따른다.
// 6-1. 딜러는 카드의 합이 17보다 낮을 경우 카드를 더 받음
// 6-2. 17 이상일 경우는 받지 않는다.
//7. 1입력 : 카드 더받기, 2입력 : 카드비교, 0입력 : 게임종료



// 카드 덱 초기화

// 초기화
$suits = array("♠", "♡", "♢", "♣");
$ranks = array("2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K", "A");
$deck = array();
$player_hand = array();
$dealer_hand = array();

// 덱 생성
foreach ($suits as $suit) {
    foreach ($ranks as $rank) {
        array_push($deck, array("rank"=>$rank, "suit"=>$suit));
    }
}

// 셔플
shuffle($deck);

// 딜러와 플레이어가 각각 처음 두 장을 받음
for ($i=0; $i<2; $i++) {
    array_push($player_hand, array_shift($deck));
    array_push($dealer_hand, array_shift($deck));
}

// 플레이어의 카드를 보여줌
echo "플레이어 카드: ".$player_hand[0]["rank"].$player_hand[0]["suit"]." ".$player_hand[1]["rank"].$player_hand[1]["suit"]."\n";

// 딜러의 첫 번째 카드를 보여줌
// n

// 플레이어의 선택
$player_score = 0;
$ace_count = 0;
foreach ($player_hand as $card) {
    $rank = $card["rank"];
    if ($rank == "A") {
        $ace_count++;
        $player_score += 11;
    } else if ($rank == "K" || $rank == "Q" || $rank == "J") {
        $player_score += 10;
    } else {
        $player_score += intval($rank);
    }
}

while (true) {
    echo "카드를 더 받으시겠습니까? (y/n) ";
    $input = strtolower(trim(fgets(STDIN)));
    if ($input == "y") {
        array_push($player_hand, array_shift($deck));
        $card = end($player_hand);
        $rank = $card["rank"];
        if ($rank == "A") {
            $ace_count++;
            $player_score += 11;
        } else if ($rank == "K" || $rank == "Q" || $rank == "J") {
            $player_score += 10;
        } else {
            $player_score += intval($rank);
        }
        if ($player_score > 21 && $ace_count > 0) {
            $player_score -= 10;
            $ace_count--;
        }
        echo "플레이어 카드: ";
        foreach ($player_hand as $card) {
            echo $card["rank"].$card["suit"]." ";
        }
        echo "\n";
        if ($player_score > 21) {
            echo "21을 초과했습니다. 패배!\n";
            if($input === 0)
            {
                break;
            }
        }}}
// while(true) {
// 	echo '시작';
// 	print "\n";
// 	fscanf(STDIN, "%d\n", $input);        
// 	if($input === 0) {
// 		break;
// 	}
// 	echo $input;
// 	print "\n";
// }
// echo "끝!\n";
?>